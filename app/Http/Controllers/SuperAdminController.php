<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceProvider;
use App\Models\ServicesCategory;

class SuperAdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('super-admin.dashboard');
    }

    public function users()
    {
        $users = User::with('roles')->where('role','!=',1)->get();
        return view('super-admin.users', compact('users'));
    }

    public function manageRole()
    {
        $users = User::where('role','!=',1)->get();
        $roles = Role::all();
        return view('super-admin.manage-role', compact(['users','roles']));
    }

    public function updateRole(Request $request)
    {
        User::where('id', $request->user_id)->update([
            'role' => $request->role_id
        ]);
        return redirect()->back();
    }

    public function services(){

        $services =Service::all();
        return view('super-admin.services',compact('services'));
    }

    public function categories(){

        $categories =ServicesCategory::all();
        return view('super-admin.categories',compact('categories'));
    }

    public function providers(){

        $providers =ServiceProvider::with('user') // Assuming the relationship name is 'user'
        ->whereHas('user', function ($query) {
            $query->where('role', 2);
        })
        ->get();
        return view('super-admin.providers',compact('providers'));
    }

}
