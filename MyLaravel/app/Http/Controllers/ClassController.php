<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyClass {
    public $name;
    public $value;
    public function __construct($name, $value = -1) {
        $this -> name = $name;
        $this -> value = $value;
        if ($value === -1) {
            $this -> setRandomValue();
        }
    }
    public function setRandomValue() {
        $this -> value = rand(1, 1000);
    }
    public function getString() {
        return "MyClass: " . $this -> name . " --> " . $this -> value;
    }
}

class ClassController extends Controller
{
    public function main() {

        return view('pages.main');
    }
}
