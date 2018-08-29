<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Validaciones
use App\Http\Requests\CompanyCreateRequest;
use App\Http\Requests\CompanyUpdateRequest;

use Illuminate\Support\Facades\Storage;

use App\Company;

class CompanyController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name=$request->get('name');
        $companies=Company::orderBy('id','DESC')
            ->name($name)
            ->paginate();
        return view('admin.companies.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyCreateRequest $request)
    {
        $company=Company::create($request->all());

        if($request->file('file'))
        {
            $path=Storage::disk('public')->put('image\companies',$request->file('file'));
            $company->fill(['file'=>asset($path)])->save();
        }
        return redirect()->route('companies.edit', $company->id)
            ->with('info','Empresa creada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company=Company::find($id);
        return view('admin.companies.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company=Company::find($id);
        return view('admin.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyUpdateRequest $request, $id)
    {
        $company=Company::find($id);
        $company->fill($request->all())->save();

        if ($request->file('file')) {
            $path=Storage::disk('public')->put('image\companies',$request->file('file'));
            $company->fill(['file'=>asset($path)])->save();
        }
        return redirect()->route('companies.edit', $company->id)
            ->with('info','Empresa editada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id)->delete();
        return redirect()->route('companies.index')
        ->with('info','Empresa eliminada correctamente');
    }
}
