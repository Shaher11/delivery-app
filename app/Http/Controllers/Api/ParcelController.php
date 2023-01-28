<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Parcel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParcelController extends Controller
{
    
    public function index()
    {
        $parcels = Parcel::with('sender:id,first_name,last_name,gender,mobile,email','delivery:id')->get();
        
        return response()->json($parcels);
    }

    public function bikerParcels()
    {
        $employee_id = Auth::user();
        dd($employee_id);
        $parcels = Parcel::with([
            'sender:id,first_name,last_name,gender,mobile,email',
            'delivery:id'
        ])->get();//employee_id
        
        return response()->json($parcels);
    }
}
