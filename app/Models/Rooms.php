<?php

namespace sinbie\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $fillable = ['title','content','image','address','phone'];
    // virtual fields
    protected $appends = ['email'];

    public function getEmailAttribute($value) {
        return '';
    }

}
