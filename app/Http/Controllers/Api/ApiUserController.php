<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources;
use App\Models\User;
use Illuminate\Http\Request;

class ApiUserController extends Controller
{

    public function index(){


        $users = User::all();
        return Resources\Users::collection($users);
    }

}
