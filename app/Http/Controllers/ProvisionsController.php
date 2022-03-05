<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provision;
use App\Models\Articles;
class ProvisionsController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $article=Articles::findOrFail($id);
        return view('admin.layout.provisions.add')->with('article',$article);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input=$request->all();
        // if ($image=$request->file('article_cover')) {
        //   // code...
        //   $destinationPath='img/';
        //   $coverImage=time(). '.' .$image->getClientOriginalExtension();
        //   $image->move($destinationPath,$coverImage);
        //   $input['article_cover']=$coverImage;
        // }
        Provision::create($input);
        return back()->with('success','Provision added Successfully');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $provisions=Provision::all();
      // $article=$
      return view('admin.layout.provisions.index')->with('provisions',$provisions);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $article=Provision::find($id);
        return view('admin.layout.provisions.edit')->with('article',$article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $article=Provision::find($id);
        $article->article_number=$request->input('article_number');
        $article->article_title=$request->input('article_title');
        $article->article_category=$request->input('article_category');
        // $coverImage='';
        // $input=$request->all();
        $coverImage="";
        if ($request->hasFile('article_cover')) {
          // code...
          $destinationPath='img/'.$article->article_cover;
          if (File::exists($destinationPath)) {
            // code...
            File::delete($destinationPath);
          }
          $image=$request->file('article_cover');
          $coverImage=time(). '.' .$image->getClientOriginalExtension();
          $image->move($destinationPath,$coverImage);
          $article->article_cover=$coverImage;
          // $input['article_cover']=$coverImage;
        }else{
          // $article->art
        }
        $article->update();
        return back()->with('success','Provision edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $article=Provision::find($id);
        $article->delete();
        return back()->with('success','Provision deleted Successfully');
    }
}
