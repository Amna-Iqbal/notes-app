<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    
    public function index()
    {
        $notes = Note::where('user_id', Auth::id())
                     ->orderBy('created_at', 'desc')
                     ->get();
        return view('notes.index', compact('notes'));
    }
    
    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Note::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('notes.index')->with('success', 'Note created successfully.');
    }

    public function show(Note $note)
    {
        if ($note->user_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }
        return view('notes.show', compact('note'));
    }
    
    public function edit(Note $note)
    {
        if ($note->user_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }
        return view('notes.edit', compact('note'));
    }
    
    public function update(Request $request, Note $note)
    {
        if ($note->user_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }
    
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
    
        $note->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
    
        return redirect()->route('notes.index')->with('success', 'Note updated successfully.');
    }
    
    public function destroy(Note $note)
    {
        if ($note->user_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }
    
        $note->delete();
        return redirect()->route('notes.index')->with('success', 'Note deleted successfully.');
    }
    
}
