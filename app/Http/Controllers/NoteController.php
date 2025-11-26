<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{
    public function index()
    {
        $notes = auth()->user()->notes;

        return response()->json([
            'success' => true,
            'message' => 'Notes fetched',
            'data'    => $notes
        ]);
    }

    public function show($id)
    {
        $note = auth()->user()->notes()->find($id);
        if (! $note) {
            return response()->json([
                'success' => false,
                'message' => 'Note not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Note fetched',
            'data'    => $note
        ]);
    }

    public function store(NoteRequest $request)
    {
        $note = auth()->user()->notes()->create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Note created successfully',
            'data'    => $note
        ], 201);
    }

    public function update(NoteRequest $request, $id)
    {
        $note = auth()->user()->notes()->find($id);
        if (! $note) {
            return response()->json([
                'success' => false,
                'message' => 'Note not found'
            ], 404);
        }

        $note->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Note updated successfully',
            'data'    => $note
        ]);
    }

    public function destroy($id)
    {
        $note = auth()->user()->notes()->find($id);
        if (! $note) {
            return response()->json([
                'success' => false,
                'message' => 'Note not found'
            ], 404);
        }

        $note->delete();

        return response()->json([
            'success' => true,
            'message' => 'Note deleted successfully'
        ]);
    }
}
