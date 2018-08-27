<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\People;
use App\Tag;
use App\Company;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $name=$request->get('name');
        $last_name=$request->get('last_name');
        $peoples=People::orderBy('id','DESC')
            ->name($name)
            ->last_name($last_name)
            ->paginate(10);
        return view('web.index',compact('peoples'));
    }
    public function contacto($id){
        $people=People::where('id', $id)->first();
        return view('web.contacto', compact('people'));
    }
    public function tag($slug){
        $peoples= People::whereHas('tags',function($query) use ($slug){
            $query->where('slug', $slug);
        })->orderBy('id','DESC')->paginate(10);
        return view('web.index', compact('peoples'));
    }
    public function tags(Request $request){
        $tag=$request->get('tag');
        $tags=Tag::orderBy('name','DESC')
            ->tag($tag)
            ->paginate(20);
        return view('web.tags',compact('tags'));
    }
    public function companies(Request $request){
        $name=$request->get('name');
        $companies= Company::orderBy('id','DESC')
            ->name($name)
            ->paginate(10);
        return view('web.companies', compact('companies'));
    }
    public function contact_company($id){
        $company=Company::find($id);
        return view('web.company', compact('company'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
