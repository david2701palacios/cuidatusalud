<?php

namespace App\Http\Controllers;

use App\Models\PersonsDetail;
use Illuminate\Http\Request;

/**
 * Class PersonsDetailController
 * @package App\Http\Controllers
 */
class PersonsDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personsDetails = PersonsDetail::paginate();

        return view('persons-detail.index', compact('personsDetails'))
            ->with('i', (request()->input('page', 1) - 1) * $personsDetails->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personsDetail = new PersonsDetail();
        return view('persons-detail.create', compact('personsDetail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PersonsDetail::$rules);

        $personsDetail = PersonsDetail::create($request->all());

        return redirect()->route('persons-details.index')
            ->with('success', 'PersonsDetail created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personsDetail = PersonsDetail::find($id);

        return view('persons-detail.show', compact('personsDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personsDetail = PersonsDetail::find($id);

        return view('persons-detail.edit', compact('personsDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PersonsDetail $personsDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonsDetail $personsDetail)
    {
        request()->validate(PersonsDetail::$rules);

        $personsDetail->update($request->all());

        return redirect()->route('persons-details.index')
            ->with('success', 'PersonsDetail updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $personsDetail = PersonsDetail::find($id)->delete();

        return redirect()->route('persons-details.index')
            ->with('success', 'PersonsDetail deleted successfully');
    }
}
