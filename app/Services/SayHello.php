<?php
 namespace  App\Services;

 class SayHello
 {
    function SayHello(String $name): string {
        return "Hello $name";
    }
 }