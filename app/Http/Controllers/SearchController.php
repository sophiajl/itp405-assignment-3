<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function redirect()
    {
        return redirect('/dvds/search');
    }
    public function index()
    {
        return view('search');
    }


    public function results()
    {
        $search = request('title');
        //$uri = $request->path();

//        if (Request::url() === '/') {
//        }
//        redirect('/dvds/search');

//        if(){
//            return redirect('/dvds/search');
//        }
        /*
            SELECT title, rating_name, genre_name
            FROM dvds
            INNER JOIN genres
            ON dvds.genre_id = genre.id
            INNER JOIN ratings
            ON dvds.rating_id = ratings.id
            WHERE title LIKE '% search'
            ORDER BY title
         */

        $dvds = DB::table('dvds')
            ->select('title', 'rating_name', 'genre_name')
            ->join('ratings', 'dvds.rating_id', '=', 'ratings.id')
            ->join('genres', 'dvds.genre_id', '=', 'genres.id')
            ->where('title', 'LIKE', "%$search%")
            ->orderBy('title')
            ->get();
        return view('search-results',[
            'dvds' => $dvds,
//            'ratings' => $ratings
            'search' => $search,


        ]);
    }

}
