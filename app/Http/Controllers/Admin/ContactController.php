<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\ContactStoreRequest;
use App\Http\Requests\ContactUpdateRequest;

use App\Contact;
use App\People;
use App\Type;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peoples=People::orderBy('name','ASC')->pluck('name','id');
        $types=Type::orderBy('description','ASC')->pluck('description','id');
        return view('admin.contacts.create', compact('types','peoples'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactStoreRequest $request)
    {
        $contact=Contact::create($request->all());
        return redirect()->route('contacts.edit',$contact->id)
            ->with('info','Contacto añadido con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peoples=People::orderBy('name','ASC')->pluck('name','id');
        $types=Type::orderBy('description','ASC')->pluck('description','id');
        $contact=Contact::find($id);
        return view('admin.contacts.edit', compact('contact','types','peoples'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactUpdateRequest $request, $id)
    {
        $contact=Contact::find($id);
        $contact->fill($request->all())->save();

        return redirect()->route('contacts.edit',$contact->id)
            ->with('info','Contacto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact=Contact::find($id)->delete();

        return back()->with('info','Contacto eliminado correctamente');
    }
}
