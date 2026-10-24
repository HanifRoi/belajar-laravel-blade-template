<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeCondition()
    {
        $this->view('include-condition', ['user'=>[
            'name'=>'Hanif',
            'owner'=>true
        ]])->assertSeeText('Selamat Datang owner')
            ->assertSeeText('Selamat Datang Hanif');

        $this->view('include-condition', ['user'=>[
            'name'=>'Hanif',
            'owner'=>false
        ]])->assertDontSeeText('Selamat Datang owner')
            ->assertSeeText('Selamat Datang Hanif');
    }
}
