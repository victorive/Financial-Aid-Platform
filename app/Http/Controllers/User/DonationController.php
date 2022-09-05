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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', [
            'donations' => Donation::latest('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.donation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        Donation::create([
            'user_id' => $user_id,
            'story' => $request->story,
            'amount' => $request->amount,
            'image' => $filename
        ]);

        return redirect('/pending')->with('message', 'Donation Request Sent!');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
    }
}
