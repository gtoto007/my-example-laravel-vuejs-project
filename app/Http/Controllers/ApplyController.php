<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplyRequest;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Inertia\Inertia;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Apply/Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Apply/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApplyRequest $request)
    {
        Application::create([...$request->validated(), 'user_id' => Auth::user()->id]);
        return to_route('apply.index')->with('message', 'la tua candidatura è stata registrata');
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $apply)
    {
        Gate::authorize('view', $apply);

        return Inertia::render('Apply/Show', [
            "first_name" => $apply->first_name,
            "last_name" => $apply->last_name,
            "phone" => $apply->phone,
            "email" => $apply->email,
            "status"=> $apply->status,
            "notes" => $apply->notes]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
