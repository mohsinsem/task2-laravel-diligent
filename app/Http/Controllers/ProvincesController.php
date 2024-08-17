<?php

namespace App\Http\Controllers;

use App\Models\Provinces;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

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
            ->AddColumn('id',function($record){
                return $record->id;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Provinces $provinces)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provinces  $provinces
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provinces $provinces)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provinces  $provinces
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provinces $provinces)
    {
        //
    }


}
