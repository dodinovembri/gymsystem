<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserAccountModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = UserAccountModel::all();   
        return view('admin.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->input('password') != $request->input('password_confirm')) {
            return redirect(route('admin.user.index'))->with('error', 'Your password doesnt match !');
        }else{
            $check = UserAccountModel::where('email', $request->input('email'))->first();
            if (empty($check)) {
                $insert = new UserAccountModel();
                $insert->name = $request->name;        
                $insert->email = $request->email;        
                $insert->password = Hash::make($request->password);                       
                $insert->created_at = date("Y-m-d H:i:s");
                $insert->save();

                return redirect(route('admin.user.index'))->with('message', 'Success adding new User !');
            }else{
                return redirect(route('admin.user.index'))->with('error', 'User already exist !');            
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
        $data['user'] = UserAccountModel::find($id);
        return view('admin.user.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = UserAccountModel::find($id);
        return view('admin.user.edit', $data);
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
        if ($request->input('password') != $request->input('password_confirm')) {
            return redirect(route('admin.user.index'))->with('error', 'Your password doesnt match !');
        }else{
            $check = UserAccountModel::where('email', $request->input('email'))->first();
            if (empty($check)) {
                $update = UserAccountModel::find($id);
                $update->name = $request->name;  
                $update->password = Hash::make($request->password);                       
                $update->updated_at = date("Y-m-d H:i:s");
                $update->update();

                return redirect(route('admin.user.index'))->with('message', 'Success updating User !');
            }else{
                return redirect(route('admin.user.index'))->with('error', 'User already exist !');            
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
        $findtodelete = UserAccountModel::find($id);
        $findtodelete->delete();

        return redirect(route('admin.user.index'))->with('message', 'User success deleted !');  
    }
}
