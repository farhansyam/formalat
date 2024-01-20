<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Equipment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        $customer = Customer::count();
        $equipment = Equipment::count();
        return view('index',compact('customer','equipment'));
    }
}
