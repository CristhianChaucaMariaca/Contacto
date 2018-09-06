<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\PeopleStoreRequest;
use App\Http\Requests\PeopleUpdateRequest;

use Illuminate\Support\Facades\Storage;

use App\People;
use App\Company;
use App\Tag;
use App\Contact;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $peoples=People::orderBy('id', 'DESC')
            ->where('user_id', auth()->user()->id)
            ->paginate(10);
       return view('admin.peoples.index', compact('peoples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies=Company::orderBy('name','ASC')->pluck('name','id');
        $tags=Tag::orderBy('name','ASC')->get();
        return view('admin.peoples.create',compact('companies', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PeopleStoreRequest $request)
    {
        $people=People::create($request->all());
        if($request->file('file'))
        {
            $path=Storage::disk('public')->put('image\peoples',$request->file('file'));
            $people->fill(['file'=>asset($path)])->save();
        }

        $people->tags()->attach($request->get('tags'));

        return redirect()->route('peoples.edit', $people->id)
            ->with('info', 'Persona creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $people=People::find($id);
        return view('admin.peoples.show', compact('people'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $people=People::find($id);
        $companies=Company::orderBy('name','ASC')->pluck('name','id');
        $tags=Tag::orderBy('name','ASC')->get();
        return view('admin.peoples.edit',compact('people','companies','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PeopleUpdateRequest $request, $id)
    {
        $people=People::find($id);
        $people->fill($request->all())->save();

        //IMAGE
        if ($request->file('file')) {
            $path=Storage::disk('public')->put('image',$request->file('file'));
            $people->fill(['file'=>asset($path)])->save();
        }

        $people->tags()->sync($request->get('tags'));

        return redirect()->route('peoples.edit', $people->id)
            ->with('info','Persona actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $people=People::find($id)->delete();
        return redirect()->route('peoples.index')
            ->with('info', 'Persona eliminada correctamente');
    }

    public function tags($slug){
        $peoples=People::whereHas('tags',function($query) use ($slug){
            $query->where('slug',$slug);
        })->orderBy('id','DESC')->paginate(10);

        return view('admin.peoples.index', compact('peoples'));
    }
}
