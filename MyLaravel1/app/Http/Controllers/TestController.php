<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class movie {
    public $title;
    public $desc;

    public function __construct($title, $desc){
    
        $this -> title = $title;
        $this -> desc = $desc;
    
    }
    
    public function getString() {
    
        return 
        'Titolo: ' . $this -> value . ' Descrizione: ' . $this -> desc;
    
    }
}
class TestController extends Controller
{
    public function home()
    {
        $films = new movie('Matrix', 'Un film a bit');
        $films2 = new movie ('L incredibile Hulk' , 'AAAA');
        dd($films, $films2);
        return view('home');
    }
}
