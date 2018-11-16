<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    public $primarykey = 'id';
    public $timestamp = true;

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
