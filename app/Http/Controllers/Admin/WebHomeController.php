<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebHomeModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class WebHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['web_home'] = WebHomeModel::all();   
        return view('admin.home.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'image_home'    => 'max:5000' 
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.web_home.create')->withInput()->withErrors($validator);
        }else{

            $insert = new WebHomeModel();

            $file                       = $request->file('image_home');
            $imagefile_name                  = uniqid() . '.'. $file->getClientOriginalExtension();
            $path = Storage::putFileAs( 'public/img', $request->file('image_home'), $imagefile_name);

            $insert->text = $request->text;
            $insert->image = $imagefile_name;
            $insert->status = $request->status;
            $insert->save();
            
            return redirect(route('admin.web_home.index'))->with('message', 'Success add data !');
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
        $data['web_home'] = WebHomeModel::find($id);
        return view('admin.home.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['web_home'] = WebHomeModel::find($id);
        return view('admin.home.edit', $data);
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
        if (empty($request->image_home)) {
            $update = WebHomeModel::find($id);
            $update->text = $request->text;        
            $update->status = $request->status;        
            $update->updated_by = auth()->user()->id;
            $update->updated_at = date("Y-m-d H:i:s");
            $update->update();

            return redirect(route('admin.web_home.index'))->with('message', 'Data success updated !');            
        }else{
             $validator = Validator::make($request->all(), [
               'image_home'    => 'max:5000' 
            ]);

            if ($validator->fails()) {
                return redirect()->route('admin.web_home.create')->withInput()->withErrors($validator);
            }else{

                $update = WebHomeModel::find($id);

                $file                       = $request->file('image_home');
                $imagefile_name                  = uniqid() . '.'. $file->getClientOriginalExtension();
                $path = Storage::putFileAs( 'public/img', $request->file('image_home'), $imagefile_name);

                $update->text = $request->text;
                $update->image = $imagefile_name;
                $update->status = $request->status;
                $update->save();
                
                return redirect(route('admin.web_home.index'))->with('message', 'Success add data !');
            }
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
        $findtodelete = WebHomeModel::find($id);
        $findtodelete->delete();

        return redirect(route('admin.web_home.index'))->with('message', 'Data success deleted !');
    }
}
