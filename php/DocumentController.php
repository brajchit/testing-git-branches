<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Documet;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DocumetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documets = Documet::all();
        return view('documets.index', ['documets' => $documets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documets.new-doc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doc = new Documet;
        $doc->name = $request->name;
        $doc->save();
        return redirect()->route('documet.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $variable = "este es un mensaje de";
        $valiable_add = "variable add en el commit 54";
        $variable2 = "el segudno commit de iss53";

        $valiable_add2 = "variable add en el commit 54";

        #agredado en el master despues del merge iss54->master
        $apend = "agregado al master";
        $apend2 = "agregado al master";
        // agreado en el iss54 despues del merge iss54->master
        $add = "agregado ";
        $add2 = "agregado otro";

        return $variable.$variable2;
    }
    public function myFunAdd($value)
    {
        return "en el priemr commit iss54";
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
