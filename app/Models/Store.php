<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'store';
    protected $fillable = ['store_name', 'store_code', 'industry_id', 'location_id'];


    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
}
