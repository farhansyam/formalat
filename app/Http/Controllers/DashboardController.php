<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Equipment;
use App\Models\FormBeritaAcara;
use App\Models\History;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        $customer = Customer::count();
        $equipment = Equipment::count();
        $survey = FormBeritaAcara::count();
        $history = History::all();
        return view('index',compact('customer','equipment','survey','history'));
    }
}
