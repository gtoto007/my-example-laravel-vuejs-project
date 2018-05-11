<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    /**
     * @param Request $request
     */
    public function acceptApplication(Request $request)
    {
        $application = Application::find($request->id);

        $application->accept();
    }

    /**
     * @param Request $request
     */
    public function refuseApplication(Request $request)
    {
        $application = Application::find($request->id);

        $application->refuse();
    }
}
