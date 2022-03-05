<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Articles;

class ContentController extends Controller
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
        return view('admin.layout.content.add')->with('article',$article);
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
        if ($image=$request->file('file')) {
          // code...
          $destinationPath='content/';
          $contentImageName=time(). '.' .$image->getClientOriginalExtension();
          $image->move($destinationPath,$contentImageName);
          $input['file']=$contentImageName;
        }
        Content::create($input);
        return back()->with('success','Content added Successfully');
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
      $contents=Content::all();
      return view('admin.layout.content.index')->with('contents',$contents);
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
        $article=Content::find($id);
        return view('admin.layout.content.edit')->with('article',$article);
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
        $content=Content::find($id);
        $content->type=$request->input('type');
        $content->description=$request->input('description');
        $content->title=$request->input('title');
        // $coverImage='';
        // $input=$request->all();
        $coverImage="";
        if ($request->hasFile('file')) {
          // code...
          $destinationPath='content/'.$article->article_cover;
          if (File::exists($destinationPath)) {
            // code...
            File::delete($destinationPath);
          }
          $image=$request->file('file');
          $coverImage=time(). '.' .$image->getClientOriginalExtension();
          $image->move($destinationPath,$coverImage);
          $article->article_cover=$coverImage;
          // $input['article_cover']=$coverImage;
        }else{
          // $article->art
        }
        $content->update();
        return back()->with('success','Content edited Successfully');
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
        $content=Content::find($id);
        $content->delete();
        return back()->with('success','Content deleted Successfully');
    }
}
