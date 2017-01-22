<?php

namespace App\Http\Controllers;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

use Illuminate\Http\Request;
use App\CounterInfo;

class CounterController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    public function index()
    {
        return CounterInfo::getCurrent();
    }

    public function show($id)
    {
        return CounterInfo::findOrFail($id);
    }

}
