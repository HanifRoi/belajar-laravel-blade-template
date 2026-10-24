<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServiceInjectionTest extends TestCase
{
public function testInjectTest()
{
    $this->view('service-injection', ['name'=>'Hanif'])->assertSeeText('Hello Hanif');
}
}
