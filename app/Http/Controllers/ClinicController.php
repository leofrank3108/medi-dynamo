<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinic;

class ClinicController extends Controller
{
    public function __construct(Clinic $clinic)
    {
        $this->clinic = $clinic;
    }


    public function index()
    {
        // dd('aca');
        return response()->json($this->clinic->paginate());
    }
}
