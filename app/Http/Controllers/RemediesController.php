<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remedie;
use App\Models\Articles;


class RemediesController extends Controller
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
        return view('admin.layout.remedies.add')->with('article',$article);
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
        Remedie::create($input);
        return back()->with('success','Remedie added Successfully');
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
      $remedies=Remedie::all();
      return view('admin.layout.remedies.index')->with('remedies',$remedies);
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
        $remedy=Remedie::find($id);
        return view('admin.layout.remedies.edit')->with('remedy',$remedy);
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
        $remedy=Remedie::find($id);
        $remedy->remedy=$request->input('remedy');
        $input=$request->all();
        $article->update();
        return back()->with('success','Remedie edited Successfully');
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
        $remedy=Remedie::find($id);
        $remedy->delete();
        return back()->with('success','Remedie deleted Successfully');
    }
}
