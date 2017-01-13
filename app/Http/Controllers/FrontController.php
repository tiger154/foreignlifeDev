<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-01-13
 * Time: 오후 7:25
 */

namespace foreignlifeDev\Http\Controllers;


class FrontController extends Controller {

    public function index() {
        echo 1;
        return view('front.index', ['number' => 123]);
    }
} 