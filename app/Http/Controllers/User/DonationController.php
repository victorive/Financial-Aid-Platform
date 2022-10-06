<?php

namespace App\Http\Controllers\User;

use App\Models\Donation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\MediaUploadTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    use MediaUploadTrait;

    public function create()
    {
        return view('user.donation.create');
    }

    public function store(Request $request)
    {
        $user_id = Auth::id();

        $request->validate([
            'story' => 'required|string|min:50|',
            'amount' => 'required|numeric',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);

        if($request->has('image')){

            $image = $request->file('image');

            $username = Auth::user()->firstname . '_' . Auth::user()->lastname;

            $name = Str::slug($username . '_' . date("d-m-Y-h-i-s"));
            $filename = $name . '.' . $image->getClientOriginalExtension();

            $folder = 'public/uploads/images';

            $this->uploadMedia($image, $folder, $filename);
        }

        $slug = substr($request->input('story'), 0, 42) . substr(Str::uuid(), 0, 8);
        $slug = Str::slug($slug);

        Donation::create([
            'user_id' => $user_id,
            'story' => $request->story,
            'slug' => $slug,
            'amount' => $request->amount,
            'image' => $filename
        ]);

        return redirect('/pending')->with('message', 'Donation Request Sent!');
    }

    public function show(Donation $donation)
    {
        return view('user.donation.show', [
            'pageTitle' => Auth::user()->firstname . " " . Auth::user()->lastname,
            'donation' => $donation
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
