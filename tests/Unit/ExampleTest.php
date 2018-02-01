<?php

namespace Tests\Unit;
use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
   
use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
    	$first = factory(Post::class)->create();
    	$second = factory(Post::class)->craete([
'created_at' => \Carbon\Carbon::now()->subMonth()
    		]); 
    	$posts = Post::archives();
     dd($posts);

        $this->assertEquals([
        				[


        				]
        	], $posts);

        $this->assertTrue(true);
    }
}
