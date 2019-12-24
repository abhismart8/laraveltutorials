<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;

class Company extends Model
{
    protected $guarded = [];

    public function customers()
    {
    	return $this->hasMany(Customer::class);
    }
}
