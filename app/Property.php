<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'property';

    protected $fillable = [
        'name',
        'transaction',
        'category_id',
        'location',
        'latitude',
        'longitude',
        'price',
        'status',
        'details',
        'images',
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
