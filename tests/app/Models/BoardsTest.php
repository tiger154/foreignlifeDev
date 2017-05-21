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
        //dump($board->id);
        // test getTagsAttribute
        $this->assertEquals(['test1','test2'], $board->tags);
        //return URL::route('question.show',['region'=>Regions::getSubdomain(),'id'=>$this->id]);
        //$this->assertEquals('',$board->link);
        $this->assertEquals(0, $board->votes);
        $this->assertEquals(0, $board->answers);
        $this->assertEquals(0, $board->views);

    }





}
