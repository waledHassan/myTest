<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ar',
        'name_en',
        'username',
        'email',
        'password',
        'mobile',
        'country_code',
    ];

    public function country()
    {
        return $this->belongsTo('App\Models\Countries','id ');
    }

}
