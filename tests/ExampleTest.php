<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use WithoutMiddleware;

    function setUp()
    {
        parent::setUp();
        $this->baseUrl = 'http://dev.sinbie.com/';
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
       $this->visit('/')
           ->see('SINBIE');
    }

    public function testQnaLink()
    {
        $this->visit('/')
            ->click('header-link-question')
            ->seePageIs('http://dev.sinbie.com/question');
    }


}
