<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scenario;
use App\Models\Articles;

class ScenariosController extends Controller
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
        // return view('admin.layout.provisions.add')->with('article',$article);
          // return view('admin.layout.interpretations.add')->with('article',$article);
        return view('admin.layout.scenarios.add')->with('article',$article);
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
        Scenario::create($input);
        return back()->with('success','Scenario added Successfully');
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
      $scenarios=Scenario::all();
      return view('admin.layout.scenarios.index')->with('scenarios',$scenarios);
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
        $article=Scenario::find($id);
        return view('admin.layout.scenarios.edit')->with('article',$article);
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
        $scenario=Scenario::find($id);
        $scenario->scenario=$request->input('scenario');
        // $article->article_title=$request->input('article_title');
        // $article->article_category=$request->input('article_category');
        // // $coverImage='';
        // $input=$request->all();
        // $coverImage="";
        // if ($request->hasFile('article_cover')) {
        //   // code...
        //   $destinationPath='img/'.$article->article_cover;
        //   if (File::exists($destinationPath)) {
        //     // code...
        //     File::delete($destinationPath);
        //   }
        //   $image=$request->file('article_cover');
        //   $coverImage=time(). '.' .$image->getClientOriginalExtension();
        //   $image->move($destinationPath,$coverImage);
        //   $article->article_cover=$coverImage;
        //   // $input['article_cover']=$coverImage;
        // }else{
        //   // $article->art
        // }
        $article->update();
        return back()->with('success','Scenario edited Successfully');
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
        $article=Scenario::find($id);
        $article->delete();
        return back()->with('success','Scenario deleted Successfully');
    }
}
