<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /* Middleware de Autenticación de usuario*/
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::all();        
        return view('notes.notes', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes.add-note');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoteRequest $request)
    {   
        $user_id = (!Auth::guest()) ? Auth::user()->id : null ;
        $note = $request->only('title', 'body');
        $note['user_id'] = $user_id;        
        $nota = Note::create($note);                
        return redirect()->route('notas.index', $nota);
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {   
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {       
        return view('notes.edit-note',['note' => $note]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoteRequest $request, $id)
    {
        $nota = Note::find($id);
        $nota->title = $request->title;
        $nota->body = $request->body;
        $nota->user_id = Auth::user()->id;
        $nota->save();

        return redirect()->route('notas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('notas.index');

    }
}
