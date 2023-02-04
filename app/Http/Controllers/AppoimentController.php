<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appoiment;

class AppoimentController extends Controller
{
    protected $appoiment;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Appoiment $appoiment)
    {
        $this->appoiment = $appoiment;
    }
    public function store(Request $request)
    {

        $appoiment = $this->appoiment->create($request->all());

        return response()->json($appoiment, 201);
    }
}
