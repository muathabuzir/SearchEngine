<?php

namespace Mawdoo3\SearchResults\Controllers;

use Mawdoo3\SearchResults\Models\SavedResults;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SavedResultsController extends Controller {

    public function __construct() {
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SavedResults $saved_results) {
        return view('sp_mawdoo3_laravel::SavedResults.index', ['saved_results' => SavedResults::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $values = array_map('json_decode', $request['value']);
        $this->validate($request, [
            'checked' => 'required',
            'comment' => 'max:250'
        ]);


        foreach ($request['checked'] as $k => $v) {

            SavedResults::create(array_filter([
                'link' => (isset($values[$k]->link) ? $values[$k]->link : ''),
                'title' => (isset($values[$k]->title) ? $values[$k]->title : ''),
                'desc' => (isset($values[$k]->snippet) ? $values[$k]->snippet : ''),
                'comment' => (isset($request->comment[$k]) ? $request->comment[$k] : ''),
                            ], 'strlen'));
        }

        return redirect('/saved_results');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SavedResults  $savedResults
     * @return \Illuminate\Http\Response
     */
    public function show(SavedResults $savedResult) {
        return view('sp_mawdoo3_laravel::SavedResults.show', ['saved_result' => $savedResult]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SavedResults  $savedResults
     * @return \Illuminate\Http\Response
     */
    public function edit(SavedResults $savedResult) {
        return view('sp_mawdoo3_laravel::SavedResults.edit', ['saved_result' => $savedResult]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SavedResults  $savedResults
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SavedResults $savedResult) {

        $this->validate($request, [
            'comment' => 'max:250'
        ]);


        if ($savedResult->update(['comment' => $request->comment]))
            $request->session()->flash('success', 'Update was successful!');


        return view('sp_mawdoo3_laravel::SavedResults.edit', ['saved_result' => $savedResult]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SavedResults  $savedResults
     * @return \Illuminate\Http\Response
     */
    public function destroy(SavedResults $savedResult) {

        $savedResult->delete();

        return redirect('/saved_results');
    }

}
