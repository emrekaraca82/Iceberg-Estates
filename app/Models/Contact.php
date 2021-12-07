<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable=['name','surname','email','phone'];

    public function getAppointment()
    {
        return $this->hasMany('App\Models\Appointment');
    }

}
