<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        $this->view('include', [])
        ->assertSeeText('Hanif Roihan Ganteng')
        ->assertSeeText('Selamat datang di website kami')
        ->assertSeeText('Selamat datang di web');

        $this->view('include', ['title'=>'Wow'])
        ->assertSeeText('Wow')
        ->assertSeeText('Selamat datang di website kami')
        ->assertSeeText('Selamat datang di web');
    }

}
