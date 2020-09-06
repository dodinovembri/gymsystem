<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CriteriaModel;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['criteria'] = CriteriaModel::all();
        return view('admin.criteria.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.criteria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $check = CriteriaModel::where('name', $request->input('name'))->first();
        if (empty($check)) {
            $insert = new CriteriaModel();
            $insert->name = $request->name;        
            $insert->attribute = $request->attribute;        
            $insert->weight = $request->weight;        
            $insert->created_by = auth()->user()->id;        
            $insert->created_at = date("Y-m-d H:i:s");
            $insert->save();

            return redirect(route('admin.criteria.index'))->with('message', 'Success add data !');
        }else{
            return redirect(route('admin.criteria.index'))->with('error', 'Data already exist !');            
        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['criteria'] = CriteriaModel::find($id);
        return view('admin.criteria.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['criteria'] = CriteriaModel::find($id);
        return view('admin.criteria.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {                
        $update = CriteriaModel::find($id);
        $update->name = $request->name;        
        $update->attribute = $request->attribute;        
        $update->weight = $request->weight;                        
        $update->updated_by = auth()->user()->id;
        $update->updated_at = date("Y-m-d H:i:s");
        $update->update();

        return redirect(route('admin.criteria.index'))->with('message', 'Data success updated !');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findtodelete = CriteriaModel::find($id);
        $findtodelete->delete();

        return redirect(route('admin.criteria.index'))->with('message', 'Data success deleted !');
    }
}
