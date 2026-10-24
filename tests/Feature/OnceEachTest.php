<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OnceEachTest extends TestCase
{
    public function testEach(){
        $this->view('each', ['users'=>[
            [
                'name'=>'Hanif',
                'hobbies'=>['Coding', 'Gaming']
            ],
            [
                'name'=>'Roihan',
                'hobbies'=>['Coding', 'Gaming']
            ]
        ]])->assertSeeInOrder(['.red', 'Hanif', 'Coding', 'Gaming', 'Roihan', 'Coding', 'Gaming']);
    }
}
