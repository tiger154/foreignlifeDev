<?php

namespace foreignlifeDev\Models;

use Illuminate\Database\Eloquent\Model;

class Boards extends Model
{
    protected $fillable = ['title','content','tags'];
}
