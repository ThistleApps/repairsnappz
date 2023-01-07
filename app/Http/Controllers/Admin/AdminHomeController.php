<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminHomeController extends Controller
{

    public function index()
    {
        return view('admin.adminhomepage');
    }

    public function userlanding()
    {
        return view('admin.user_mgmt.userlanding');
    }


    //used to fixture users
    public function seeduser()
    {
        $user = User::create([
            'name' => 'Admin2',
            'email' => 'admin@gmail.com',
            'password' => 'admin123'
        ]);

        $role = Role::create(['name' => 'admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
