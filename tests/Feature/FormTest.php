<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view('form', ['user'=>[
            'name'=>'Hanif',
            'premium'=>true,
            'admin'=>true
        ]])->assertSee('checked')->assertSee('Hanif')->assertDontSee('readonly');

        $this->view('form', ['user'=>[
            'name'=>'Roihan',
            'premium'=>false,
            'admin'=>false
        ]])->assertDontSee('checked')->assertSee('Roihan')->assertSee('readonly');
    }
}
