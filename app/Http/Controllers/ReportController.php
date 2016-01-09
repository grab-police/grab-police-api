<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return Report::latest()->get();
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $data = $request->json()->all();

        $report                 = new Report();

        $report->shortdesc      = $data['shortdesc'];
        $report->description    = $data['description'];
        $report->area           = $data['area'];

        $report->save();
    }
}
