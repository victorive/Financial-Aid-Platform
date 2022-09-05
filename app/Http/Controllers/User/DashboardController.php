<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();

        return view('user.dashboard', [
            'donations' => Donation::where('user_id', $user_id)->latest('id')->get()
        ]);
    }

    public function profile(){

        return view('user.profile.index');
    }

    public function settings(){

        return view('user.setting.index');
    }

    public function notifications(){

        return;
    }


}
