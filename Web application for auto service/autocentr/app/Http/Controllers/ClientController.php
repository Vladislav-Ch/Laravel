<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();

        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'surname' => 'required',
            'name' => 'required',
            'patronymic' => 'required',
            'date_of_birth' => 'required',
            'registration' => 'required',
            'passport' => 'required'
        ]);

        Client::create($request->all());

        return redirect()->route('admin.clients.index');
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
        $clients = Client::find($id);

        return view('admin.clients.edit', compact('clients'));
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
        $request->validate([
            'surname' => 'required',
            'name' => 'required',
            'patronymic' => 'required',
            'date_of_birth' => 'required',
            'registration' => 'required',
            'passport' => 'required'
        ]);

        $clients = Client::find($id);
        $clients->surname = $request->get('surname');
        $clients->name = $request->get('name');
        $clients->patronymic = $request->get('patronymic');
        $clients->date_of_birth = $request->get('date_of_birth');
        $clients->registration = $request->get('registration');
        $clients->passport = $request->get('passport');
        $clients->save();

        return redirect()->route('admin.clients.index');
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
