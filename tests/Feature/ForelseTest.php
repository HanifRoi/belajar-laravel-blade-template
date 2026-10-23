<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForelseTest extends TestCase
{
    public function testForelse()
    {
        $this->view('forelse', ['hobbies'=>[]])->assertSeeText('Tidak punya hobi');
    }

    public function testForelseAda()
    {
        $this->view('forelse', ['hobbies'=>['Coding']])->assertSeeText('Coding');
    }
}
