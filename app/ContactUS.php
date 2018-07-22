<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class ContactUS extends Model
{
 
public $table = 'contact_us';
 
protected $fillable  = ['name', 'lastname', 'phone', 'ext', 'email', 'subject', 'message'];
 
}