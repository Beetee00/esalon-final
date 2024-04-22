<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointments;
use App\Models\Salon;
use App\Models\Stock;
use App\Models\StockRequest;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $stock_requests = StockRequest::all();
        //dd($stock_requests);
        $salons = Salon::all()->count();
        $users = User::all()->count();
        $stock = Stock::all()->count();
        $appointments = Appointments::all()->count();
        $getSalon = User::all();
        //$user = Salon::with('stocks', 'appointments', 'user', 'stock_requests')->find(1);
       // dd($user);
        return view('admin.dashboard', compact('stock_requests', 'salons','appointments', 'users', 'stock'));
      }
}
