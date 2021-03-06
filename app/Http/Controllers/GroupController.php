<?php

namespace App\Http\Controllers;
use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    protected $title = 'Grupos';
    protected $ruta =[];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ruta = [['Inicio',''],['Grupos','grupo']];
        $title = $this->title;
        $list = Group::all();
        return view('grupo.index', compact('ruta','title','list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ruta = [['Inicio',''],['Grupos','grupo'],['Nuevo','grupo/create']];
        $title = $this->title;
        $isnew =true;
        $urlForm = 'grupo';
        $group = new Group();
        return view('grupo.new', compact('ruta','title','urlForm','isnew','group'));
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
        $data = request()->all();
        Group::create([
            'descrip'=>$data['descrip']
        ]);
        return redirect()->route('grupo.index');
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
        $group = Group::find($id);
        $ruta = [['Inicio',''],['Grupos','grupo'],['Editar','grupo/create']];
        $title = $this->title;
        $isnew =false;
        $urlForm = 'grupo/'.$id;
        return view('grupo.new', compact('ruta','title','urlForm','isnew','group'));
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
        $group = Group::find($id);
        $data = request()->all();
        $group->update ($data);        
        $group->save();
        return redirect()->route('grupo.index');
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
