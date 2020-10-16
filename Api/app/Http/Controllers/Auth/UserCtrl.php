<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Permission as Permissions;
use Auth;
class UserCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    public function get_dependency(){
        return response()->json([
            'status' => "Ok",
            "permissions" => Permissions::all()
    ], 200);
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
        $this->validate($request,[
            "name" => "required",
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt('123456');

        if($user->save()){
            // $permission = new PermissionUsers;
            // $permission->user_id = $user->id;
            // $permission->permission_id = $request->permission_id;
            // $permission->save();
            return response()->json(['status' => "Ok",'message' => "Cadastrado com sucesso..."], 200);
        }
        return response()->json(['status' => "Error",'message' => "Nao foi possivel cadastrar..."], 200);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        if(User::find($id)->delete())
            return response()->json(['status' => "Ok",'message' => "Eliminado com sucesso..."], 200);
        else 
            return response()->json(['status' => "Error",'message' => "Nao foi possivel eliminar..."], 200);
    }
}
