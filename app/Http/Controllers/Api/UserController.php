<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        
        return response()->json([
            'users' => User::orderBy('id','asc')->paginate(),
            
        ],200);
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        $user=User::create($request->all());
        return response()->json([
         
         'message' => 'usuario creado',
         'users' => $user
     ],200);
    }

    
    public function show(User $user)
    {
        $id=$user->id;
        return response()->json([
            'user' => User::find($id),
        ],200);
    }

    
    public function edit(User $user)
    {
        
    }

    
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return response()->json([
            'message' => 'Lista actualizada ',
            'users'=>$user,
         ],200);
    }

    
    public function destroy(User $user)
    {
     $user->delete();
     return response()->json([
        'message' => 'usuario eliminado ',
     ],200);
    }
}
