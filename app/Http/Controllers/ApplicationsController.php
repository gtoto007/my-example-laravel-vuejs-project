<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplyRequest;
use App\Models\Application;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Inertia\Inertia;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('viewAny', Application::class);

        $applications = Application::orderByRaw("CASE WHEN Status = '".Status::Pendente."' THEN 0 ELSE 1 END")
            ->orderby('updated_at', 'Desc')
            ->paginate(10);


        return Inertia::render('Apply/Index', ['applications' => $applications]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if ($request->user()->application()->exists())
            return $this->redirectApplicationPage($request->user()->application);

        return Inertia::render('Apply/Create');
    }


    public function accept(Request $request)
    {
        $application = Application::findOrFail($request->input('id'));
        try {
            $application->accept();
        } catch (\Exception $e) {
            return to_route('home')->with('message', $e->getMessage());
        }
        return to_route('apply.index')->with('message', 'Candidatura accettata');
    }

    public function discard(Request $request)
    {
        $application = Application::findOrFail($request->input('id'));
        try {
            $application->discard();
        } catch (\Exception $e) {
            return to_route('home')->with('message', $e->getMessage());
        }
        return to_route('apply.index')->with('message', 'Candidatura scartata');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApplyRequest $request)
    {
        if ($request->user()->application()->exists())
            return $this->redirectApplicationPage($request->user()->application);

        $application = Application::create([...$request->validated(), 'user_id' => Auth::user()->id]);
        return to_route('apply.show', $application->id);
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
            "status" => $apply->status,
            "notes" => $apply->notes]);
    }

    /**
     * @param Application $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectApplicationPage(Application $application): \Illuminate\Http\RedirectResponse
    {
        return redirect()->intended(route('apply.show', $application->id))
            ->with(['message' => 'ti sei già candidato']);
    }
}
