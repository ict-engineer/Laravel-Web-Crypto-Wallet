<?php

namespace App\Http\Controllers\admin\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Users = User::all();
        return view('admin.users.index', ['Users'=>$Users]);
        // return view('admin.admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'password'         => 'required|min:6',
            'confirm_password' => 'required|min:6|same:password',
            'email' => [
                Rule::unique('users'),
            ],
        ]);


        $data = $request->input();
        // dd($data);
        if($data['rolecheck'] == 'Admin')
        {
            $user = User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'user_type' => 'Admin',
            ]);
            $user->assignRole('Admin');
        }
        else if($data['rolecheck'] == 'Business')
        {
       
            $user = User::create([
                'organization_name' => $data['organization_name'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'website_url' => $data['website_url'],
                'yearly_revenue' => $data['revenue'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'user_type' => 'Business User',
            ]);
            $user->assignRole('Business');
            
        }
        else if($data['rolecheck'] == 'User')
        {
            $user = User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'user_type' => 'General User',
            ]);
            $user->assignRole('User');
            
        }
        $users = User::all();
        return view('admin.users.index', ['Users'=>$users]);
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
        // dd("$id");
        $user = User::find($id);
        return view('admin.users.show')->with('User', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('User', $user);
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
        $this->validate($request, [
            
            'confirm_password' => 'same:password',
        ]);
        // dd($request->input());
        $user = User::find($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->organization_name = null;
        $user->website_url = null;
        $user->yearly_revenue = null;
        if($request->input('rolecheck') == 'Business')
        {
            $user->organization_name = $request->input('organization_name');
            $user->website_url = $request->input('website_url');
            $user->yearly_revenue = $request->input('revenue');
            $user->user_type = 'Business User';

            // $user->deferAndAttachNewRole('Business');
            
            // $user->removeRole($user->getRoleNames());
            // $user->assignRole('Business');
            $user->syncRoles('Business');
        }
        elseif($request->input('rolecheck') == 'Admin'){
            $user->user_type = 'Admin';
            // $user->deferAndAttachNewRole('Admin');
            // $user->removeRole($user->getRoleNames());
            // $user->assignRole('Admin');
            $user->syncRoles('Admin');
            
        }
        else{
            $user->user_type = 'General User';
            // $user->deferAndAttachNewRole('User');
            // $user->assignRole('User');
            $user->syncRoles('User');
        }

        if($request->input('password') != null)
        {
            $user->password = Hash::make($request->input('password'));
        }

        $user->update();

        $users = User::all();
        return view('admin.users.index', ['Users'=>$users]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // dd("233333");
        $user = User::find($id);
        $user->delete();
        $users = User::all();
        return view('admin.users.index', ['Users'=>$users]);
    }
}
