<?php

namespace foreignlifeDev\Models;

use Illuminate\Database\Eloquent\Model;

class Boards extends Model
{
    protected $fillable = ['title','content','tags'];
    // virtual fields
    protected $appends = ['votes','answers','views','link'];


    public function getTagsAttribute($value) {
        return explode(' ',$value);
    }

    public function getLinkAttribute() {
        return '/question/'.$this->id;
    }

    public function getVotesAttribute() {
        return 0;
    }

    public function getAnswersAttribute() {
        return 0;
    }

    public function getViewsAttribute() {
        return 0;
    }
}
