<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'date' => 'required',
            'salon_id' => 'required',
            'user_id' => 'required',
            'rated' => 'required',
            'message' => 'required',
            'customer_image' => '|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        //dd($request);
        $appointment = new Feedback([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'date' => $request->get('date'),
            'rated' => $request->get('rated'),
            'message' => $request->get('message'),
            'salon_id' => $request->get('salon_id'),
            'user_id' => $request->get('user_id'),
        ]);
        //
        if ($request->hasFile('customer_image')) {
            $destination_path = public_path('images/uploads');
            $image3 = $request->file('customer_image');
            $image_name3 = $image3->getClientOriginalName();
            $image3->move($destination_path, $image_name3);
            $appointment['customer_image'] = $image_name3;
        } else {

        }
       // dd($appointment);

        $appointment->save();
        return redirect('/')->with('success', 'Feedback submitted successfully!');
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
