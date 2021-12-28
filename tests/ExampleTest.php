<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    public function testBasicExample()
    {
        $jeffrey = factory('App\User')->create(['name' => 'Jeffrey Way']);
        
        $this->actingAs($jeffrey)
            ->visit('/admin')
            ->seePageIs('/admin')
            ->see('Jeffrey Way');
    }
}
