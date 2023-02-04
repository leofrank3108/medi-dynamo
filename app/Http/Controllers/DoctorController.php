<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;


class DoctorController extends Controller
{
    protected $doctor;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Doctor $doctor)
    {
        $this->doctor = $doctor;
    }
    public function index()
    {
        $doctor = Doctor::get();
        return $doctor;
        // return response()->json($this->doctor->paginate());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $doctor = $this->doctor->create($request->all());

        return response()->json($doctor, 201);
    }

    public function show(Doctor $doctor)
    {
        return response()->json($doctor);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Doctor $doctor)
    {

        //  dd('update');
        $doctor->update($request->all());
        
        return response()->json($doctor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return response()->json('null', 204);
    }
}
