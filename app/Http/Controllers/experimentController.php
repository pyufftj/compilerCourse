<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class experimentController extends Controller
{
    //
    public function getExperiments()
    {
        return view('content.experiments');
    }

}
