<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class QuestionControllerTest  extends TestCase {

    use WithoutMiddleware;

    function setUp()
    {
        parent::setUp();
        $this->baseUrl = 'http://dev.sinbie.com/';
    }

    /**
     * Simple test if we see title
     */
    function testCreate() {
        $this->visit('/question/create')
            ->see('TITLE');
    }

} 