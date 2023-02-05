<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appoiment;
use App\Models\Doctor;

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

    public function index()
    {
        $f = $appoiment->doctors;
        dd($f);
        $response = Appoiment::join('doctors', 'doctors.id', '=', 'appoiments.doctor_id')
                    ->join('clinics', 'clinics.id', '=', 'appoiments.clinic_id')
                    ->join('schedules', 'schedules.id', '=', 'appoiments.schedule_id')
                    ->select('doctors.fullname', 'doctors.especialidad', 'clinics.name', 'schedules.fecha', 'schedules.horas', 'schedules.turno');
    
         return response()->json($response->paginate());
    }
    public function store(Request $request)
    {

        $appoiment = $this->appoiment->create($request->all());

        return response()->json($appoiment, 201);
    }
}

