<?php

namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    protected $title = 'Marcas';
    protected $ruta =[];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruta = [['Inicio',''],['Marcas','marca']];
        $title = $this->title;
        $list = Brand::all();
        return view('brand.index', compact('ruta','title','list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruta = [['Inicio',''],['Marcas','grupo'],['Nuevo','marca/create']];
        $title = $this->title;
        $isnew =true;
        $urlForm = 'marca';
        $brand = new Brand();
        return view('brand.new', compact('ruta','title','urlForm','isnew','brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->all();
        Brand::create([
            'name'=>$data['name']
        ]);
        return redirect()->route('marca.index');
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
        $brand = Brand::find($id);
        $ruta = [['Inicio',''],['Marca','grupo'],['Editar','']];
        $title = $this->title;
        $isnew =false;
        $urlForm = 'marca/'.$id;
        return view('brand.new', compact('ruta','title','urlForm','isnew','brand'));
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
        $brand = Brand::find($id);
        $data = request()->all();
        $brand->update ($data);        
        $brand->save();
        return redirect()->route('marca.index');
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
