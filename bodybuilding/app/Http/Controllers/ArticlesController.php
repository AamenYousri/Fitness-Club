<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{ 
  public function __construct()
  {
      $this->middleware('auth')->except('articles','show');
  }

    function articles(){
        $articles = Article::where('boolean','0')->orderBy('id', 'desc')->paginate(12);
        $nutritions = Article::where('boolean','1')->orderBy('id', 'desc')->paginate(12);
        // dd($articles);
        return view('articles', compact('articles','nutritions'));
      }
      


      // show single page

      function show($id){

        $article = Article::find($id);

        return view('/article' , compact('article'));

      }



      // create article

      public function create(){
        return view('create');
      }


      // store articles

      public function store(Request $request){

        
        if($request->hasFile('coverImage')){
          $file = $request->file('coverImage');
          $ext = $file->getClientOriginalExtension();
          $filename = 'cover_image' . '_' . time() . '_' . $ext; 
          $file->storeAs('public/coverImage', $filename);

        } else {
          $filename = 'defaultimg.png';
        }

        $article = new Article();

        $article->title = $request->title;        
        $article->body = $request->body;
        $article->img = $filename;
        $article->boolean = $request->boolean;

        $article->save();


        return redirect('/articles')->with('status', 'Article has been created');
      }

      public function edit($id){

          $article = Article::find($id);
          return view('edit' , compact('article'));


      }

      public function update(Request $request, $id){
        $article = Article::find($id);
        
        $article->title = $request->title;        
        $article->body = $request->body;
        $article->boolean = $request->boolean;

        $article->save();


        return redirect('/articles')->with('status', 'Article has been updated');
      }



      public function delete($id){

        $article = Article::find($id);
        $article->delete();

        return redirect('/articles')->with('status', 'Article has been deleted');

      }
}




