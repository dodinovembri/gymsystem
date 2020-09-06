<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CriterionValueModel;

class CriterionValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data['criteria_id'] = $id;
        $data['criterion_value'] = CriterionValueModel::where('criteria_id', $id)->get();
        return view('admin.criterion_value.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data['criteria_id'] = $id;
        return view('admin.criterion_value.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $criteria_id)
    {
        $insert = new CriterionValueModel();
        $insert->criteria_id = $criteria_id;
        $insert->description = $request->description;        
        $insert->value = $request->value;        
        $insert->created_by = auth()->user()->id;        
        $insert->created_at = date("Y-m-d H:i:s");
        $insert->save();

        return redirect(route('admin.criterion_value.index', $criteria_id))->with('message', 'Success add data !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $criteria_id)
    {
        $data['criteria_id'] = $criteria_id;
        $data['criterion_value'] = CriterionValueModel::find($id);
        return view('admin.criterion_value.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $criteria_id)
    {
        $data['criteria_id'] = $criteria_id;
        $data['criterion_value'] = CriterionValueModel::find($id);
        return view('admin.criterion_value.edit', $data);
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
        $find = CriterionValueModel::find($id);        
        $find->description = $request->description;        
        $find->value = $request->value;        
        $find->updated_by = auth()->user()->id;        
        $find->updated_at = date("Y-m-d H:i:s");
        $find->save();

        return redirect(route('admin.criterion_value.index', $request->criteria_id ))->with('message', 'Success edit data !');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findtodelete = CriterionValueModel::find($id);
        $findtodelete->delete();

        return back()->with('message', 'Data success deleted !');
    }
}
