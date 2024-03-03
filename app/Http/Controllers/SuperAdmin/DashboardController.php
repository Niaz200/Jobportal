<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function Index(){
        return view('pages.admin.dashboard');
    }


    public function Profile(){

        // $id = Auth::user()->id;

        // $user = User::where('id',$id)->first();
        $data = User::with('profile')->find(2);
        // $data = User::with('items')->find(1);
        // $data = User::where('user_id',$id)->with('profile')->first();
        dd($data);
        return view('pages.admin.profile');
    }
}
