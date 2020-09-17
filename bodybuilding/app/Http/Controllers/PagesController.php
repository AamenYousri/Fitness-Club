<?php

namespace App\Http\Controllers;

use App\Article; 
use Illuminate\Http\Request;

class PagesController extends Controller
{

    function index(){
        $articles1 = Article::orderBy('id', 'desc')->take(1)->get();
        $articles2 = Article::orderBy('id', 'desc')->skip(1)->take(1)->get();
        $articles3 = Article::orderBy('id', 'desc')->skip(2)->take(1)->get();
        
        
     

        return view('index', compact('articles1','articles2','articles3'));
       

    }
    

   
    
    function programs(){
       return view('programs');
   }
    
    
    function nutrition(){
       return view('nutrition');
    }
        

    function motivation(){
        return view('motivation');
    }
            
    
    function contactus(){
        return view('contactus');
    }
                
                                            
}


