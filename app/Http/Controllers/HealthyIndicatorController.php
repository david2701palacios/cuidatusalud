<?php

namespace App\Http\Controllers;

use App\Models\HealthyIndicator;
use Illuminate\Http\Request;

/**
 * Class HealthyIndicatorController
 * @package App\Http\Controllers
 */
class HealthyIndicatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $healthyIndicators = HealthyIndicator::paginate();

        return view('healthy-indicator.index', compact('healthyIndicators'))
            ->with('i', (request()->input('page', 1) - 1) * $healthyIndicators->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $healthyIndicator = new HealthyIndicator();
        return view('healthy-indicator.create', compact('healthyIndicator'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(HealthyIndicator::$rules);

        $healthyIndicator = HealthyIndicator::create($request->all());

        return redirect()->route('healthy-indicators.index')
            ->with('success', 'HealthyIndicator created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $healthyIndicator = HealthyIndicator::find($id);

        return view('healthy-indicator.show', compact('healthyIndicator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $healthyIndicator = HealthyIndicator::find($id);

        return view('healthy-indicator.edit', compact('healthyIndicator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  HealthyIndicator $healthyIndicator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HealthyIndicator $healthyIndicator)
    {
        request()->validate(HealthyIndicator::$rules);

        $healthyIndicator->update($request->all());

        return redirect()->route('healthy-indicators.index')
            ->with('success', 'HealthyIndicator updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $healthyIndicator = HealthyIndicator::find($id)->delete();

        return redirect()->route('healthy-indicators.index')
            ->with('success', 'HealthyIndicator deleted successfully');
    }
}
