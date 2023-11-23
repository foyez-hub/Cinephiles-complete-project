<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie_info;
use App\Models\memeinfo;
use Illuminate\Support\Facades\DB;

class homepageController extends Controller
{
    function isthere($s1, $key)
    {

        $s1 = explode(",", $s1);
        $flag = 0;

        foreach ($s1 as $i) {
            if ($i == $key) {
                $flag = 1;
                break;
            }
        }

        if ($flag == 1) {
            return true;
        } else {

            return false;
        }
    }

    function index()
    {





        $email = session('email');

        $myinfo = DB::table('users')
            ->where('email', $email)
            ->select('*')
            ->first();

        $jen = array();
        if($myinfo){

        $watchlist = $myinfo->watchlist;
        $watchlists = explode(",", $watchlist);
        foreach ($watchlists as $j) {

            $mInfo = DB::table('movie_infos')
                ->where('movie_name', $j)
                ->select('*')
                ->first();

            if ($mInfo) {

                $watchlistgenres = $mInfo->genres;

                if (!isset($jen[$watchlistgenres])) {
                    $jen[$watchlistgenres] = 0;
                }

                $jen[$watchlistgenres]++;

            }


           
        }

    }

    if($myinfo){
        $favorites = $myinfo->favorites;
        $favorites = explode(",", $favorites);

        foreach ($favorites as $j) {

            $mInfo = DB::table('movie_infos')
                ->where('movie_name', $j)
                ->select('*')
                ->first();

            if ($mInfo) {

                $watchlistgenres = $mInfo->genres;

                if (!isset($jen[$watchlistgenres])) {
                    $jen[$watchlistgenres] = 0;
                }

                $jen[$watchlistgenres]++;

            }


           
        }

    }

    if($myinfo){

        $recent = $myinfo->recent;
        $recent = explode(",", $recent);

        foreach ($recent as $j) {

            $mInfo = DB::table('movie_infos')
                ->where('movie_name', $j)
                ->select('*')
                ->first();

            if ($mInfo) {

                $watchlistgenres = $mInfo->genres;

                if (!isset($jen[$watchlistgenres])) {
                    $jen[$watchlistgenres] = 0;
                }

                $jen[$watchlistgenres]++;

            }


           
        }

    }




         $maxjen='DRAMA';
         $mm=-1;
        foreach ($jen as $key => $value) {
            if($value>$mm){
                $maxjen=$key;
            }

          }

        $recom = DB::table('movie_infos')
            ->where('genres', $maxjen)
            ->select('*')
            ->get();

        //  $recommend=array();   

        //  foreach($recom as $re){

        //     $myinfo = DB::table('users')
        //     ->where('email', $email)
        //     ->select('*')
        //     ->first();

        //     $fav=$myinfo->favorites;
        //     $recent=$myinfo->recent;
        //     if($this->isthere($fav,$re->movie_name)==false&&$this->isthere($recent,$re->movie_name)==false){

        //         array_push($recommend, $re);


        //     }

        //  }   
  



        $SCIENCEFICTION = DB::table('movie_infos')
            ->where('genres', 'SCIENCE FICTION')
            ->select('*')
            ->get();
        $COMEDY = DB::table('movie_infos')
            ->where('genres', 'COMEDY')
            ->select('*')
            ->get();

        $DRAMA = DB::table('movie_infos')
            ->where('genres', 'DRAMA')
            ->select('*')
            ->get();


        $HORROR = DB::table('movie_infos')
            ->where('genres', 'HORROR')
            ->select('*')
            ->get();

        $newmovies = DB::table('movie_infos')
            ->where('release_year', '>', 2005)
            ->select('*')
            ->get();
        $oldmovies = DB::table('movie_infos')
            ->where('release_year', '<', 2005)
            ->select('*')
            ->get();






        return view('index', [

            'users' => $recom,
            'newmovies' => $newmovies,
            'oldmovies' => $oldmovies,
            'DRAMA' => $DRAMA,
            'HORROR' => $HORROR,
            'COMEDY' => $COMEDY,
            'SCIENCEFICTION' => $SCIENCEFICTION,



        ]);
    }


    public function play(Request $request)
    {
        $video = $request->input('video');
        return view('streaming', ['video' => $video]);
    }
    function loadDetails(Request $request)
    {

        $moviename = $request->input('moviename');
        $allmovie = movie_info::all();
        $res = "empty";
        foreach ($allmovie as $i) {
            if ($i->movie_name == $moviename) {
                $res = $i;
                break;
            }
        }

        $email = session('email');

        $myinfo = DB::table('users')
            ->where('email', $email)
            ->select('*')
            ->first();


        $mywatchlists = $myinfo->watchlist;
        $data = [];
        $data[0] = $res;

        $favorites = $myinfo->favorites;



        if ($this->isthere($mywatchlists, $moviename)) {
            $data[1] = 1;

        } else {
            
            $data[1] = 0;
        }

        if ($this->isthere($favorites, $moviename)) {
            $data[2] = 1;
        } else {
            $data[2] = 0;
        }


        return response()->json($data);
    }
}
