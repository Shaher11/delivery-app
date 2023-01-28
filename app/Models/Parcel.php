<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'description'

    ];

    public function sender()
    {
        return $this->belongsTo(User::class);
    }

    public function delivery()
    {
        return $this->belongsTo(Delivery::class,'parcel_id');
    } 
    public function empl()
    {
        return $this->belongsToMany(Student::class)->withPivot('work_out','activity_out','final_out')->withTimestamps();
    }
}
