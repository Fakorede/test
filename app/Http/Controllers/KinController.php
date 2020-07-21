<?php

namespace App\Http\Controllers;

use App\Kin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'surname' => 'required|string',
            'firstname' => 'required|string',
            'address' => 'required',
            'phone' => 'required|string|max:11',
            'email' => 'required|email',
        ]);

        $user_id = Auth::user()->id;

        Kin::where('user_id', $user_id)->update([
            'surname' => $request->surname,
            'firstname' => $request->firstname,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return redirect()->route('home')->with('message', 'Next of Kin details successfully added!');
    }

}
