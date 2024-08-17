<?php

namespace App\Http\Controllers;

use App\Models\Provinces;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Requests\ProvincesRequest;

class ProvincesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
          
            $query=Provinces::query()->orderBy('id','desc');
            if ($request['filter_pname'] != null) {
                $query->where('name','like', '%'.$request['filter_pname'].'%');
            }
            
            $data= $query;

            return DataTables::of($data)
            ->AddColumn('created_at',function($record){
                return  \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $record->created_at)->format('d-M Y h:i');
            })
            ->addColumn('action', function ($record) {
                //$patient = (object)$patient;
                return view('provinces._action', compact('record'));
            })
            ->make(true);

        }    
        return view('provinces.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data   = array();
        return view('provinces.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProvincesRequest $request)
    {
        Provinces::create([
            'name'=>$request->name,
        ]);

        session()->flash('success', __('Created successfully'));
        return redirect()->route('provinces.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provinces  $provinces
     * @return \Illuminate\Http\Response
     */
    public function show(Provinces $provinces)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provinces  $provinces
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['record'] = Provinces::findOrFail($id);
        return view('provinces.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provinces  $provinces
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provinces $provinces, $id)
    {
        $record= Provinces::findOrFail($id);
        $record->update([
            'name'=>$request->name,

        ]);

        session()->flash('success', __('Updated successfully'));
        return redirect()->route('provinces.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provinces  $provinces
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        //$id        = $request->id;
        Provinces::findOrFail($id)->delete();
        session()->flash('success', __('Deleted successfully'));

       return redirect()->route('provinces.index');
    }


}
