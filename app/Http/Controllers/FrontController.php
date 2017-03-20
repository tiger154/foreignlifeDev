<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-01-13
 * Time: 오후 7:25
 */

namespace sinbie\Http\Controllers;


class FrontController extends Controller {

    public function index() {
        return view('front.index_template1', ['number' => 123]);
    }
}
