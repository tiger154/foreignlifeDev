<?php

namespace sinbie\Models;

use Flc\Regions\Facades\Regions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class Boards extends Model
{
    protected $fillable = ['title','content','tags'];
    // virtual fields
    protected $appends = ['votes','answers','views','link'];


    public function getTagsAttribute($value) {
        return explode(' ',$value);
    }

    public function getLinkAttribute() {
        return URL::route('question.show',['region'=>Regions::getSubdomain(),'id'=>$this->id]);
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
