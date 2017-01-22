<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CounterInfo;

class CalcController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    public function show($id)
    {
        return CounterInfo::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $counter = CounterInfo::findOrFail($id);
        $counter->calcCounts++;
        $counter->save();

        return $counter;
    }
}
