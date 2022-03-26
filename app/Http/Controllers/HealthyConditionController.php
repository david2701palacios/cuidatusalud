<?php

namespace App\Http\Controllers;

use App\Models\HealthyCondition;
use Illuminate\Http\Request;

/**
 * Class HealthyConditionController
 * @package App\Http\Controllers
 */
class HealthyConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $healthyConditions = HealthyCondition::paginate();

        return view('healthy-condition.index', compact('healthyConditions'))
            ->with('i', (request()->input('page', 1) - 1) * $healthyConditions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $healthyCondition = new HealthyCondition();
        return view('healthy-condition.create', compact('healthyCondition'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(HealthyCondition::$rules);

        $healthyCondition = HealthyCondition::create($request->all());

        return redirect()->route('healthy-conditions.index')
            ->with('success', 'HealthyCondition created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $healthyCondition = HealthyCondition::find($id);

        return view('healthy-condition.show', compact('healthyCondition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $healthyCondition = HealthyCondition::find($id);

        return view('healthy-condition.edit', compact('healthyCondition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  HealthyCondition $healthyCondition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HealthyCondition $healthyCondition)
    {
        request()->validate(HealthyCondition::$rules);

        $healthyCondition->update($request->all());

        return redirect()->route('healthy-conditions.index')
            ->with('success', 'HealthyCondition updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $healthyCondition = HealthyCondition::find($id)->delete();

        return redirect()->route('healthy-conditions.index')
            ->with('success', 'HealthyCondition deleted successfully');
    }
}
