<?php

namespace App\Http\Controllers;

use App\Models\LabResult;
use Illuminate\Http\Request;

/**
 * Class LabResultController
 * @package App\Http\Controllers
 */
class LabResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labResults = LabResult::paginate();

        return view('lab-result.index', compact('labResults'))
            ->with('i', (request()->input('page', 1) - 1) * $labResults->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $labResult = new LabResult();
        return view('lab-result.create', compact('labResult'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(LabResult::$rules);

        $labResult = LabResult::create($request->all());

        return redirect()->route('lab-results.index')
            ->with('success', 'LabResult created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $labResult = LabResult::find($id);

        return view('lab-result.show', compact('labResult'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $labResult = LabResult::find($id);

        return view('lab-result.edit', compact('labResult'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  LabResult $labResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LabResult $labResult)
    {
        request()->validate(LabResult::$rules);

        $labResult->update($request->all());

        return redirect()->route('lab-results.index')
            ->with('success', 'LabResult updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $labResult = LabResult::find($id)->delete();

        return redirect()->route('lab-results.index')
            ->with('success', 'LabResult deleted successfully');
    }
}
