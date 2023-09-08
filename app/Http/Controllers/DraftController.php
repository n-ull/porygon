<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDraft;
use App\Models\Draft;
use Illuminate\Http\Request;

class DraftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drafts = Draft::all();
        return view('draft.index', compact('drafts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('draft.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDraft $request)
    {
        $validated = $request->validated();

        Draft::create([
            'user_id' => auth()->id(),
            'title' => $validated->title,
            'description' => $validated->description,
            'slug' => \Str::slug($validated->title) . '-' . \Str::random(4),
            'content' => $request->content,
        ]);

        return redirect('/draft')->with('success', 'Draft created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Draft $draft)
    {
        $this->authorize('view', $draft);

        return view('draft.show', compact('draft'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Draft $draft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Draft $draft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Draft $draft)
    {
        //
    }
}
