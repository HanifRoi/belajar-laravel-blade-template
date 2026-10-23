<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoopTest extends TestCase
{
    public function testLoop()
    {
        $this->view('loop', ['hobbies'=>['Coding', 'Gaming', 'Hiking']])
        ->assertSeeText('1. Coding')
        ->assertSeeText('2. Gaming');   
    }
}
