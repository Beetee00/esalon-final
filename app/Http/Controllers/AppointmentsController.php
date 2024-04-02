<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\Salon;
use App\Models\Slot;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $appointments = Appointments::where('user_id', $user_id)->paginate(3);
        $user = User::findOrFail($user_id);
        $salons = Salon::all();
        //dd($appointments);
        return view('appointments.index', compact('appointments', 'salons', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salons = Salon::all();
        $users = User::where('role', 'User')->get();
        return view('appointments.create', compact('salons', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slot_time = Slot::where('time', $request->get('time'))->pluck('status');
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'time' => 'required',
            'date' => 'required',
            'salon_id' => 'required',
            'user_id' => 'required',
            'style' => 'required',
            'style_image' => '|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        //dd($request);
        $appointment = new Appointments([
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'time' => $request->get('time'),
            'date' => $request->get('date'),
            'style' => $request->get('style'),
            'salon_id' => $request->get('salon_id'),
            'user_id' => $request->get('user_id'),
        ]);
        //
        if ($request->hasFile('style_image')) {
            $destination_path = public_path('images/uploads');
            $image3 = $request->file('style_image');
            $image_name3 = $image3->getClientOriginalName();
            $image3->move($destination_path, $image_name3);
            $appointment['style_image'] = $image_name3;
        } else {

        }
       dd($slot_time);
       $slot_time = 'Occupied';
        $appointment->save();

        return redirect('/')->with('success',"Appointment Saved Successfully");
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
