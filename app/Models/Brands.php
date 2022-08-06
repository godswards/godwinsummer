<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;

    protected $fillable = ['price_id', 'name', 'specs'];

    public function price() {
        return $this->belongsTo('App\Models\Price');
    }
}
