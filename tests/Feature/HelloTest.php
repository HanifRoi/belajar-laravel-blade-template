<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get('/hello')->assertSeeText('Hanif');
    }

    public function testHelloNested()
    {
        $this->get('/world')->assertSeeText('Roihan');
    }

    public function testViewWithoutRouting()
    {
        $this->view('hello.world', ['name'=>'Roihan'])->assertSeeText('Roihan');
    }
}
