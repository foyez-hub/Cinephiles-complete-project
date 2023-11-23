<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie_info;
use App\Models\user;
class SearchController extends Controller
{

    public function search(Request $req)
    {
        $searchbox = $req->input('searchbox');
        $movies = movie_info::where('movie_name', 'LIKE', '%' . $searchbox . '%')->get();

        return view('search', ['movies' => $movies]);
    }

    public function realsearch(Request $req)
    {
        return "hello";
    }

    public function searchResults(Request $request)
    {
        $query = $request->input('q');
        $movies = movie_info::where('movie_name', 'LIKE', '%' . $query . '%')->get();
        $resultsHtml = '';
        foreach ($movies as $movie) {
            $resultsHtml .= '<div class="search-result">' . $movie->movie_name . '</div>';
        }
        return $resultsHtml;
    }

    public function searchbar($ss)
    {
        
        $movies = movie_info::where('movie_name', 'LIKE', '%' . $ss . '%')->get();
        $people=user::where('name', 'LIKE', '%' . $ss . '%')->get();
        session(['searchResult' => $movies]);
        session(['searchResultPeople' => $people]);

        
        return response()->json($movies);


    }

    public function searchRealtime($rr)
    {
        $movies = movie_info::where('movie_name', 'LIKE', '%' . $rr . '%')->get();
        $names=user::where('name', 'LIKE', '%' . $rr . '%')->get();
        $final=array();
        if($movies){
            foreach($movies as $i){
                array_push($final,$i->movie_name);


            }
        }
        if($names){

            foreach($names as $i){
                array_push($final,$i->name);
                

            }
        }

        return response()->json($final);
    }

    function searchAllData(){

        $res=session('searchResult');
        $res1=session('searchResultPeople');
        if(count($res)==0){
            $res='';
        }
        if(count($res1)==0){
            $res1='';
        }

        $data=[];
        $data[0]=$res;
        $data[1]=$res1;
        
        return response()->json($data);

    }

    
}

