<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class QuestionControllerTest extends TestCase
{
    use WithoutMiddleware;
    use DatabaseTransactions; // It rollback all database data

    public function setUp()
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

    function test_controller_store() {
        $form = [
            'title' => 'testTitleAgain7',
            'content' => 'contentlol',
            'tags' => 'tagshaha111'
        ];
        // 2. check by calling
        $this->post('/question',$form)
            ->assertResponseStatus(302)
            ->assertRedirectedToRoute('question.index',['dev'])
            ->seeInDatabase('boards',['title' => $form['title']]);
    }

    function test_model_store() {
        // 1. model store check
        $form = [
            'title' => 'testTitleAgain8',
            'content' => 'contentlol',
            'tags' => 'tagshaha111'
        ];
        $board = factory(sinbie\Models\Boards::class)->create($form);
        $this->assertEquals($form['title'],$board->title);
    }
}
