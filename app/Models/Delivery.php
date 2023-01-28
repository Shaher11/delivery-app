<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'parcel_id',
        'employee_id',
        'status',
        'pick_up_date',
        'drop_of_date',

    ];

    // public function parcels()
    // {
    //     return $this->belongsTo(Parcel::class);
    // } 
    // public function biker()
    // {
    //     return $this->belongsTo(user::class,'employee_id');
    // } 
}
