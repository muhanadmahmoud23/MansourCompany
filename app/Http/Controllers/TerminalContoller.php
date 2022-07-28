<?php

namespace App\Http\Controllers;

use App\Models\Terminal;
use App\Http\Requests\TerminalRequest;
use Illuminate\Http\Request;

class TerminalContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables()->of(Terminal::all())
                ->addIndexColumn()
                ->addColumn('action',  'terminal.datatable.actions')
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('terminal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('terminal.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TerminalRequest $request)
    {
        Terminal::create($request->validated());
        return view('terminal.index');
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
        $terminal = Terminal::find($id);
        return view('terminal.edit',[
            'terminal'   => $terminal
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TerminalRequest $request, $id)
    {
        $terminal = Terminal::find($id);
        $terminal->update($request->validated());
        return view('terminal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $terminal = Terminal::find($id);
        $terminal->delete();
        return view('terminal.index');
    }
}
