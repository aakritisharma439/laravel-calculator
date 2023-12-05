<?php

namespace LP\Calculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function add($a, $b) {
        $result = $a + $b ;
        return view('calculator::add',compact('result'));
    }
    public function subtract($a, $b) {
        $result =  $a - $b;
        return view('calculator::add',compact('result'));
    }
    public function multiply($a, $b){
        $result = $a * $b;
        return view('calculator::add',compact('result'));
    }
    public function division($a, $b){
        if ($b == '0') {
            return "Cannot divide by zero.";
        }
        $result = $a / $b;
        return view('calculator::add',compact('result'));
    }  
    
    public function fibonacci($a, $b){
        $num = 0; 
        $series = [$a, $b];
            while ($num < 8) {  
             $c = $b + $a;  
             $series[] = $c;
             $a = $b;  
             $b = $c;  
             $num = $num + 1;     
        }
        $result = implode(', ', $series);
        return view('calculator::add', compact('result'));
    }   
}