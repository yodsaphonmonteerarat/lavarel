<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    public function getAllRolesByUser($id)
{
$user =User::find($id);
$roles = $user->roles;
return view('rolesbyuser', compact('user','roles'));
}

public function getAllUsersByRole($id)
{
$role = Role::find($id);
$users = $role->users;
return $users;
}

}

