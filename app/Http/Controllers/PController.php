<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        $portfolio =[
            ['title' => 'Proyecto #4'],
        ];
        return view('portfolio',compact('portfolio'));
    }
}
