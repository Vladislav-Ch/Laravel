<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workers = Worker::all();

        return view('admin.workers.index', compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.workers.create');
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
            'specialty' => 'required',
            'rank' => 'required',
            'work_experience' => 'required'
        ]);

        Worker::create($request->all());

        return redirect()->route('admin.workers.index');
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
        $workers = Worker::find($id);

        return view('admin.workers.edit', compact('workers'));
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
            'specialty' => 'required',
            'rank' => 'required',
            'work_experience' => 'required'
        ]);

        $workers = Worker::find($id);
        $workers->surname = $request->get('surname');
        $workers->name = $request->get('name');
        $workers->patronymic = $request->get('patronymic');
        $workers->specialty = $request->get('specialty');
        $workers->rank = $request->get('rank');
        $workers->work_experience = $request->get('work_experience');
        $workers->save();

        return redirect()->route('admin.workers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workers = Worker::find($id);

        $workers->works = '0';
        $workers->save();

        return redirect()->route('admin.workers.index');
    }
}
