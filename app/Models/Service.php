<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function lenguage() {
        return $this->belongsTo('App\Models\Lenguage');
    }

    public function place() {
        return $this->belongsTo('App\Models\place');
    }

    public function candidates()
    {
        return $this->belongsToMany('App\Models\User', 'inscriptions');
    }
}
