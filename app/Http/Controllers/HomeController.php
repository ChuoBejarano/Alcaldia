<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* Modelo de la base de datos */
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;  
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users= User::all();
        $users = User::orderBy('id', 'asc')->Simplepaginate(4);
        return view('welcome', compact('users'));
    }

    public function create()
    {
        $data=null;
        $data['roles']=Role::all();


        $permissions = Role::select('roles.*','permissions.*')
                ->join('permissions', 'roles.id', '=', 'permissions.role_id')
                ->orderBY('roles.id')
                ->get();
        $data['permissions']=$permissions;
               

        return view("user.create",compact('data'));
    }
    
    public function store(Request $request)
    {
       
       $user = New User;
       $user->name = $request->get('name');
       $user->password = Hash::make($request->get('password'));

       $user->save();

       $roles = Role::find($request->get('role_id'));
       $user->role_user()->attach($roles);
       
       $permissions = Permission::find($request->get('permission_id'));
        

       $user->permission_user()->attach($permissions);

      

       return redirect()->route('home');
        
       }

    public function modify($id)
    {
         $data=null;
        $user=User::find($id);

         $user_permisos = User::select('roles.role','permissions.*','role_user.*','permission_user.*')
                ->leftjoin('permission_user', 'users.id' , '=' , 'permission_user.user_id')
                ->leftjoin('role_user', 'users.id' , '=' , 'role_user.user_id')
                ->leftjoin('roles', 'role_user.role_id' , '=' , 'roles.id')
                ->leftjoin('permissions', 'permission_user.permission_id' , '=' , 'permissions.id')

                ->where('users.id' , '=' , $user->id)
                
                ->get();
        $data['roles']=Role::all();

        $permissions = Role::select('roles.*','permissions.*')
                ->join('permissions', 'roles.id', '=', 'permissions.role_id')
                ->orderBY('roles.id')
                ->get();
        $data['permissions']=$permissions;
      

       $data['user']=$user;

       $data['permisos_user']=$user_permisos;

        return view("user.modify", compact('data'));
    }
    
    public function update($id, Request $request)
    {
      $user = User::FindOrFail($id);
       $user->password = Hash::make($request->get('password'));
        $user->save();
      
       $roles = Role::find($request->get('role_id'));
       $user->role_user()->sync($roles);
       
       $permissions = Permission::find($request->get('permission_id'));
       $user->permission_user()->sync($permissions);


       return redirect()->route('home');  
    }
    
    public function delete($id)
    {
        $data=null;
        $user=User::find($id);

         $user_permisos = User::select('roles.role','permissions.*','role_user.*','permission_user.*')
                ->leftjoin('permission_user', 'users.id' , '=' , 'permission_user.user_id')
                ->leftjoin('role_user', 'users.id' , '=' , 'role_user.user_id')
                ->leftjoin('roles', 'role_user.role_id' , '=' , 'roles.id')
                ->leftjoin('permissions', 'permission_user.permission_id' , '=' , 'permissions.id')

                ->where('users.id' , '=' , $user->id)
                
                ->get();

       $data['user']=$user;

       $data['permisos_user']=$user_permisos;

        return view("user.delete", compact('data'));
    } 
    
    public function destroy(User $user, $id)
    { 
      $user = User::FindOrFail($id);
      $user->role_user()->detach();
      $user->permission_user()->detach();

      $user->delete();     

      return redirect()->route('home');
    }
     
    public function contacto()
    {
        return view("contacto");
    }

    public function historial()
    {
        return view('historial');
    }

    public function buscar(Request $request)
    {
       $data=null;
       $input = $request->all();

    if($request->get('busqueda')){
      $user = User::where('id', '=', "%{$request->get('busqueda')}%");

      $data['user']=$user;
      return view('historial', compact('data'));
    }
    
      return view('historial');
    }

    public function documentacion()
    {
        return view("documentacion");
    }

    public function informacion()
    {
        return view("informacion");
    }
}