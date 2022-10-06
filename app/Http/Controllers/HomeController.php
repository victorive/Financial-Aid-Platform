<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        return view('index', [
            'donations' => Donation::with('user')->latest('id')->paginate(8)
        ]);
    }

    public function show(Donation $donation)
    {
        return view('donation', [
            'pageTitle' => $donation->user->firstname . $donation->user->lastname,
            'donation' => $donation
        ]);
    }
}
