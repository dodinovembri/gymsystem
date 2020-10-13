<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class NewsBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['news'] = NewsModel::all();
        return view('admin.news.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
           'image_news'    => 'max:5000' 
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.news.create')->withInput()->withErrors($validator);
        }else{

            $insert = new NewsModel();

            $file                       = $request->file('image_news');
            $imagefile_name             = uniqid() . '.'. $file->getClientOriginalExtension();
            $path = Storage::putFileAs( 'public/img', $request->file('image_news'), $imagefile_name);

            $insert->title = $request->title;
            $insert->description = $request->description;
            $insert->date = $request->date;
            $insert->image = $imagefile_name;
            $insert->status = $request->status;
            $insert->save();
            
            return redirect(route('admin.news.index'))->with('message', 'Success add data !');
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
        $data['news'] = NewsModel::find($id);
        return view('admin.news.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findtodelete = NewsModel::find($id);
        $findtodelete->delete();

        return redirect(route('admin.news.index'))->with('message', 'Data success deleted !');
    }
}
