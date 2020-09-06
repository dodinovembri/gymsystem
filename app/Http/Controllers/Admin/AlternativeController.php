<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AlternativeModel;
use App\Models\AlternativeValueModel;
use App\Models\CriteriaModel;
use App\Models\CriterionValueModel;
use Illuminate\Support\Facades\Validator;

class AlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['alternative'] = AlternativeModel::all();
        return view('admin.alternative.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alternative.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        set_time_limit(0);
        $validator = Validator::make($request->all(), [
           'image'    => 'max:5000' 
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.alternative.create')->withInput()->withErrors($validator);
        }else{

            $check = AlternativeModel::where('code', $request->input('code'))->first();
            if (empty($check)) {
            
                $file                       = $request->file('image');
                $fileName3                  = uniqid() . '.'. $file->getClientOriginalExtension();
                $request->file('image')->move("img/", $fileName3);

                $insert = new AlternativeModel();
                $insert->code = $request->code;        
                $insert->name = $request->name;        
                $insert->value_set = 0;
                $insert->description = $request->description;        
                $insert->image = $fileName3;        
                $insert->ket = $request->ket;        
                $insert->location = $request->location;        
                $insert->created_by = auth()->user()->id;        
                $insert->created_at = date("Y-m-d H:i:s");
                $insert->save();

                return redirect(route('admin.alternative.index'))->with('message', 'Success add data !');
            }else{
                return redirect(route('admin.alternative.index'))->with('error', 'Data already exist !');            
            }            
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
        $data['alternative'] = AlternativeModel::find($id);
        return view('admin.alternative.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['alternative'] = AlternativeModel::find($id);
        return view('admin.alternative.edit', $data);
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

        set_time_limit(0);
        $validator = Validator::make($request->all(), [
           'image'    => 'max:5000' 
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.alternative.create')->withInput()->withErrors($validator);
        }else{

            $update = AlternativeModel::find($id);            
            $update->name = $request->name;        
            $update->description = $request->description; 
            if (isset($request->image)) {                       
                $update->image = $request->image;        
            }       
            $update->ket = $request->ket;        
            $update->location = $request->location;        
            $update->updated_by = auth()->user()->id;
            $update->updated_at = date("Y-m-d H:i:s");
            $update->update();            
            return redirect(route('admin.alternative.index'))->with('message', 'Data success updated !'); 

            }            
                  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findtodelete = AlternativeModel::find($id);
        $findtodelete->delete();

        return redirect(route('admin.alternative.index'))->with('message', 'Data success deleted !');
    }

    public function add_value($id)
    {
        $data['alternative_id'] = $id;
        $data['alternative'] = AlternativeModel::find($id);
        $data['criteria'] = CriteriaModel::all();
        return view('admin.alternative.add_value', $data);
    }   

    public function store_alternative_value(Request $request, $alternative_id)
    {            
        $find = AlternativeValueModel::where('alternative_id', $alternative_id)->get();
        if (empty($find)) {
            $sumCritetrion = count($request->value);
            for ($i=0; $i < $sumCritetrion; $i++) { 
             $data = explode("&" , $request->value[$i]);

             $insert = new AlternativeValueModel();            
             $insert->alternative_id = $alternative_id;  
             $insert->criteria_id = $data[1];        
             $insert->criterion_value_id = $data[0];        
             $insert->created_by = auth()->user()->id;        
             $insert->created_at = date("Y-m-d H:i:s");
             $insert->save();                
         }            
            $update_alternative = AlternativeModel::find($alternative_id);
            $update_alternative->value_set = 1;
            $update_alternative->update();
            return redirect(route('admin.alternative.index'))->with('message', 'Success set up value !');
     }else{       

        $findtodelete = AlternativeValueModel::where('alternative_id', $alternative_id)->get();
        foreach ($findtodelete as $key => $value) {
            $value->delete();
        }

            $sumCritetrion = count($request->value);
            for ($i=0; $i < $sumCritetrion; $i++) { 
             $data = explode("&" , $request->value[$i]);

             $insert = new AlternativeValueModel();            
             $insert->alternative_id = $alternative_id;  
             $insert->criteria_id = $data[0];        
             $insert->criterion_value_id = $data[1];        
             $insert->created_by = auth()->user()->id;        
             $insert->created_at = date("Y-m-d H:i:s");
             $insert->save();   
         }   
            $update_alternative = AlternativeModel::find($alternative_id);
            $update_alternative->value_set = 1;
            $update_alternative->update();         
            return redirect(route('admin.alternative.index'))->with('message', 'Success set up value !');     
     }       

 }     
}
