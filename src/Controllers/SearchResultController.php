<?php

namespace Mawdoo3\SearchResults\Controllers;

use Mawdoo3\SearchResults;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mawdoo3\SearchResults\Services\Google;

class SearchResultController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        return view('sp_mawdoo3_laravel::search.index');
    }

    public function getResult(Request $request, Google $google) {
        $this->validate($request, [
            'search' => 'required|max:250'
        ]);

        #$data = $google->getData($request->search);

        $data = '{"status":1,"message":"sucess","data":{"items":[{"title":"AMMNA \u2013 Australian Mens & Mixed Netball Association","link":"http:\/\/www.ammna.com.au\/","snippet":"AMMNA News. \ufeffAMMNA Awards draws curtain on 2019 Australian \nChampionships April 30, 2019; Australian Championships Live Stream April 18, \n2019; Game\u00a0..."},{"title":"2015 AMMNA Netball Championships Mens Highlights - YouTube","link":"https:\/\/www.youtube.com\/watch?v=nxlRH08m81s","snippet":"May 27, 2015 ... 2015 AMMNA Netball Championships Mens Highlights. MatthewBayard. Loading\n... Unsubscribe from MatthewBayard? Cancel Unsubscribe."}]}}';
        $data = json_decode($data);

        $search =  array_slice($data->data->items, 0, 10);
        
        /*$search = array();
        if ($data['status'] == 1 && !empty($data['data']->items))
            $search = array_slice($data['data']->items, 0, 10);
        */

        return view('sp_mawdoo3_laravel::search.index', ['data' => $search]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SearchResults  $searchResults
     * @return \Illuminate\Http\Response
     */
    public function show(SearchResults $searchResults) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SearchResults  $searchResults
     * @return \Illuminate\Http\Response
     */
    public function edit(SearchResults $searchResults) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SearchResults  $searchResults
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SearchResults $searchResults) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SearchResults  $searchResults
     * @return \Illuminate\Http\Response
     */
    public function destroy(SearchResults $searchResults) {
        //
    }

}
