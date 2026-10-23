<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisabledBladeTest extends TestCase
{
    public function testTextDisabled()
    {
        $this->view('disabled-blade', ['name'=>'Hanif'])->assertDontSeeText('Hanif')->assertSeeText('Hello {{ $name }}');
    }
}
