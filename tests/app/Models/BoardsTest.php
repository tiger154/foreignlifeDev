<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BoardsTest extends TestCase
{
    use WithoutMiddleware;
    use DatabaseTransactions; // It rollback all database data

    public function setUp()
    {
        parent::setUp();
        $this->baseUrl = 'http://dev.sinbie.com/';
    }

    public function testBoardsModel(){
        $form = [
            'title' => 'testTitleAgain8',
            'content' => 'contentlol',
            'tags' => 'test1 test2'
        ];
        $board = factory(sinbie\Models\Boards::class)->create($form);
        $this->assertEquals(['test1','test2'], $board->tags);
        $this->assertEquals(0, $board->votes);
        $this->assertEquals(0, $board->answers);
        $this->assertEquals(0, $board->views);

        // test routing
       // $this->get('/');
       //  $subdomain = \Flc\Regions\Facades\Regions::shouldReceive('getSubdomain')->andReturn('gb');
       //  $this->assertRedirectedToRoute('question.show',['region' => $subdomain, 'id' => $board->id]);
       // ->assertRedirectedToRoute('question.index',['dev'])
    }





}
