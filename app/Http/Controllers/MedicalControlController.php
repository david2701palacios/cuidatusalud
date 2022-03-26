<?php

namespace App\Http\Controllers;

use App\Models\MedicalControl;
use Illuminate\Http\Request;

/**
 * Class MedicalControlController
 * @package App\Http\Controllers
 */
class MedicalControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicalControls = MedicalControl::paginate();

        return view('medical-control.index', compact('medicalControls'))
            ->with('i', (request()->input('page', 1) - 1) * $medicalControls->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicalControl = new MedicalControl();
        return view('medical-control.create', compact('medicalControl'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MedicalControl::$rules);

        $medicalControl = MedicalControl::create($request->all());

        return redirect()->route('medical-controls.index')
            ->with('success', 'MedicalControl created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicalControl = MedicalControl::find($id);

        return view('medical-control.show', compact('medicalControl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicalControl = MedicalControl::find($id);

        return view('medical-control.edit', compact('medicalControl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MedicalControl $medicalControl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicalControl $medicalControl)
    {
        request()->validate(MedicalControl::$rules);

        $medicalControl->update($request->all());

        return redirect()->route('medical-controls.index')
            ->with('success', 'MedicalControl updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $medicalControl = MedicalControl::find($id)->delete();

        return redirect()->route('medical-controls.index')
            ->with('success', 'MedicalControl deleted successfully');
    }
}
