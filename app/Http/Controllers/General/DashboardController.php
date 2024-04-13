<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\Appointments;
use App\Models\Feedback;
use App\Models\Salon;
use App\Models\StockRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $appointments = Appointments::where('user_id', $user_id)->paginate(3);
        $my_appointments = Appointments::where('user_id', $user_id)->count();
        $user = User::findOrFail($user_id);
        $salons = Salon::all();
        $my_requests = StockRequest::where('user', $user_name)->count();
        $feedbacks = Feedback::where("user_id", $user_id)->get();
        return view('general.dashboard', compact('appointments', 'salons', 'user', 'my_requests', 'my_appointments', 'feedbacks'));
      }
}
