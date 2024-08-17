<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use App\Models\Provinces;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Requests\DivisionsRequest;

class DivisionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['provinces'] = Provinces::all();
        if ($request->ajax()) {
          
            $query=Divisions::with('province')->orderBy('id','desc');
            if ($request['filter_pname'] != null) {
                $query->where('name','like', '%'.$request['filter_pname'].'%');
            }
            if ($request['province_id'] != null) {
                $query->where('province_id', $request['province_id']);
            }
            
            $data= $query;

            return DataTables::of($data)
            ->AddColumn('created_at',function($record){
                return  \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $record->created_at)->format('d-M Y h:i');
            })
            ->AddColumn('province_name',function($record){
                return  $record->province->name;
            })
            ->addColumn('action', function ($record) {
                //$patient = (object)$patient;
                return view('divisions._action', compact('record'));
            })
            ->make(true);

        }    
        return view('divisions.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['provinces'] = Provinces::all();
        return view('divisions.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DivisionsRequest $request)
    {
        Divisions::create([
            'name'=>$request->name,
            'province_id'=>$request->province_id,
        ]);

        session()->flash('success', __('Created successfully'));
        return redirect()->route('divisions.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Divisions  $divisions
     * @return \Illuminate\Http\Response
     */
    public function show(Divisions $divisions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Divisions  $divisions
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['record'] = Divisions::findOrFail($id);
        $data['provinces'] = Provinces::all();
        return view('divisions.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Divisions  $divisions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Divisions $divisions, $id)
    {
        $record= Divisions::findOrFail($id);
        $record->update([
            'name'=>$request->name,
            'province_id'=>$request->province_id,

        ]);

        session()->flash('success', __('Updated successfully'));
        return redirect()->route('divisions.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Divisions  $divisions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        //$id        = $request->id;
        Divisions::findOrFail($id)->delete();
        session()->flash('success', __('Deleted successfully'));

       return redirect()->route('divisions.index');
    }


}
