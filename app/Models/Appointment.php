<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable=['contact_id','appointment_address','appointment_date'];

    public function getContact()  
    {
        return $this->hasOne(Contact::class,'id','contact_id');
    }
}
