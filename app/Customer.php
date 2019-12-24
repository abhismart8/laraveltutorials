<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;
class Customer extends Model
{

	public function getActiveAttribute($attribute){
		return [
			0 => 'Inactive',
			1 => 'Active',
		][$attribute];

	}

	//protected example
   	//protected $fillable = ['name', 'email', 'active'];

   	//guarded example
   	protected $guarded = [];	

   	public function scopeActive($query)
   	{
   		return $query->where('active', 1);
   	}

   	public function scopeInactive($query)
   	{
   		return $query->where('active', 0);
   	}

   	public function company()
    {
    	return $this->belongsTo(Company::class);
    }
}
