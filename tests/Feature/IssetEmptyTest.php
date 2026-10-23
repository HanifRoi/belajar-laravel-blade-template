<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetEmpty()
    {
        $this->view('isset-empty', [])
                ->assertDontSeeText('Hello')
                ->assertSeeText("I don't have any hobbies", false);

        $this->view('isset-empty', ['name' => 'Hanif'])
                ->assertSeeText('Hello, my name is Hanif')
                ->assertSeeText("I don't have any hobbies", false);
                
        $this->view('isset-empty', ['name'=>'Roihan', 'hobbies'=>['Coding']])
                ->assertSeeText('Hello, my name is Roihan')
                ->assertDontSeeText("I don't have any hobbies", false);
    }
}
