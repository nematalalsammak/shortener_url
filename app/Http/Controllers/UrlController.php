<?php

namespace App\Http\Controllers;

use App\Models\Url;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user=User::all();
        $urls=Url::with('user')->get();

        /*$urls=Url::all();
        $user=User::with('urls');*/

        /*$urls=Url::when($request->id,function($query,$value){
        $query->where('urls.user_id','=',$value);    
        })->with('user')->get();*/

        return view('dashboard', [
            'urls' =>  $urls, 
            'user'=> $user,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/create', [
            'url' => new Url(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = new Url();
        $url->url_text = $request->get('url_text');
        $url->code = Str::random(10);
        $url->user_id = auth()->user()->id;
        $url->save();

        return redirect('/index')
            ->with('success', 'url Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function shortenLink($code)
    {
        $find = Url::where('code', $code)->first();
        if($find){
            $find->increment('count');        
            return redirect($find->url_text);

        }
    }

}
