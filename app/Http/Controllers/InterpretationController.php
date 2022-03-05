<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interpretation;
use App\Models\Articles;

class InterpretationController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

      $article=Articles::findOrFail($id);
      // return view('admin.layout.provisions.add')->with('article',$article);
        return view('admin.layout.interpretations.add')->with('article',$article);
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
        Interpretation::create($input);
        return back()->with('success','Interpretations added Successfully');
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
      $interpretations=Interpretation::all();
      return view('admin.layout.interpretations.index')->with('interpretations',$interpretations);
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
        $article=Interpretations::find($id);
        return view('admin.layout.interpretations.edit')->with('article',$article);
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
        $interpretation=Interpretations::find($id);
        $interpretation->interpretation=$request->input('interpretation');
        $interpretation->update();
        return back()->with('success','Interpretations edited Successfully');
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
        $article=Interpretation::find($id);
        $article->delete();
        return back()->with('success','Interpretations deleted Successfully');
    }
}
