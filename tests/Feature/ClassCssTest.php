<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClassCssTest extends TestCase
{
    public function testClassCss()
    {
        $this->view('class-css', ['hobbies'=>[
            [
                'name' => 'Coding',
                'love'=>true
            ],
            [
                'name'=>'Gaming',
                'love'=>false
            ]
        ]])->assertSee('<li class="red bold">Coding</li>', false)
            ->assertSee('<li class="red">Gaming</li>', false);
    }
}
