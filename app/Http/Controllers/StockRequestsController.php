<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use App\Models\StockRequest;
use App\Models\Stock;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StockRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->name;
       // dd($id);
        $stock_requests = StockRequest::where("user", $id)->get();
        return view('stock_requests.index', compact('stock_requests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $salons = Salon::all();
        $stocks = \App\Models\Stock::all();
        return view('stock_requests.create', compact('user', 'salons', 'stocks'));
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
            'date' => 'required',
            'salon_id' => 'required',
            'user' => 'required',
            'units' => 'required',
            'stock_id' => 'required'

        ]);
        //dd($request);

        $stock_val = $request->get('stock_id');
        $getStock = Stock::where('id', $stock_val)->get();

        $stck = intval($stock_val);
        $request_stock = new StockRequest([
            'date' => $request->get('date'),
            'units' => $request->get('units'),
            'salon_id' => $request->get('salon_id'),
            'user' => $request->get('user'),
            'stock_id' => $request->get('stock_id')
        ]);
        $req_units = $request->get('units');

       $int_reqs = intval($req_units);
       //$total_units = intval($getStock);
       $new_units = $getStock[0]->units - $int_reqs;
       $new_stock_value = $getStock[0]->units;
       dd($getStock);
       // $request_stock->save();
       $new_stock_value=$new_units;
       $getStock->save();

        return redirect('/general_dashboard')->with('status', 'Stock request submitted successfully!');
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
