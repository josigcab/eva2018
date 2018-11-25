<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
       
       $a = DB::table('role_user')->where('role_id', 3)->get();
       $index=0;
       $vector=array();
       foreach($a as $b)
        {
            $vector[$index]=$b->user_id; 
            $index++;
           // echo $b->user_id;
           // echo $b->role_id;
           // echo "<br>";
        }
    

        $mm=array();
        for ($x=0; $x < count($vector); $x++) { 
           $users = DB::table('users')->where('id', $vector[$x])->first();
           $mm[$x]=$users;
        }
        
       
        $users=$mm;

        
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
      $this->validate($request, ['name' => 'required|max:255', 'apellido' => 'required|max:255', 'direccion' => 'required|max:255', 'telefono' => 'required|numeric|unique:users|between:1000000,79999999', 'genero' => 'required', 'email' => 'required|email|max:255|unique:users', 'password' => 'required|min:8', ]);
       
         $pass = User::create($request->all());

         $pass->password=(bcrypt($pass->password));
        
         $pass->save();

        $user = DB::table('users')->where('email', $pass->email)->first();
        $user = $user->id;
        
        DB::table('role_user')->insert(
        ['user_id' => $user, 'role_id' => 3]
        );   

   

        Session::flash('flash_message', 'User added!');

        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['name' => 'required|max:255', 'apellido' => 'required|max:255', 'direccion' => 'required|max:255', 'telefono' => 'required|numeric|between:1000000,79999999', 'genero' => 'required', 'email' => 'required|email|max:255', 'password' => 'required|min:8', ]);

        $persona=DB::table('users')->where('id', $id)->first();
     

        $user = User::findOrFail($id);
        $user->update($request->all());


        DB::table('users')
            ->where('id', $user->id)
            ->update(array('password' => bcrypt($request->input('password'))));



        Session::flash('flash_message', 'User updated!');

        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
      $persona=DB::table('users')->where('id', $id)->first();
     
        DB::table('curso_inscritos')->where('user_id', $id)->delete();

        User::destroy($id);

        Session::flash('flash_message', 'User deleted!');

        return redirect('admin/users');
    }
}
