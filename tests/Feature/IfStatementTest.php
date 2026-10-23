<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfStatementTest extends TestCase
{
    public function testIf()
    {
        $this->view('if', ['hobbies' => ['coding']])->assertSeeText('I have one hobby');
        $this->view('if', ['hobbies' => ['coding', 'football']])->assertSeeText('I have multiple hobby');
        $this->view('if', ['hobbies' => []])->assertSeeText("I dont have hobby", false);
    }
}
