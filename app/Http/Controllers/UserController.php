<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salons = \App\Models\Salon::all();
        return view('users.create', compact('salons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           // $users = User::first();
           $request->validate([
            'name' => 'required',
            'email' => '',
            'role' => 'required',
            'salon_id' => 'required',
            'password' => 'required',
            'profile_image' => '|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // $store = $request->all();
        $pass =  Hash::make($request->get('password'));
        $client = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'role' => $request->get('role'),
            'salon_id' => $request->get('salon_id'),
            'password' => $pass,
        ]);
        if ($request->hasFile('profile_image')) {
            $destination_path = public_path('images/uploads');
            $image3 = $request->file('profile_image');
            $image_name3 = $image3->getClientOriginalName();
            $image3->move($destination_path, $image_name3);
            $appointment['profile_image'] = $image_name3;
        } else {

        }
        //dd($client);
        $client->save();
        return redirect(route('users.index'))->with('status', 'User Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrfail($id);
        $appointments = Appointments::where('user_id', $id)->paginate(3);
        return view('users.show', compact('user', 'appointments'));
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
        $user = User::findOrFail($id);
        $user->delete();
        return redirect(route('users.index'))->with('status', 'User Removed Successfully!');
    }
}
