<?php

namespace App\Http\Controllers;

use App\Models\reception_schedule;
use App\Http\Requests\Storereception_scheduleRequest;
use App\Http\Requests\Updatereception_scheduleRequest;

class ReceptionScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daysOfWeek = ['Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
        $timeSlots = ['08H00-12H00', '13H00-17H00', '17H30-20H00'];
        $bureaux = [1, 2, 3, 4, 5];

        $schedules = reception_schedule::with('pastor', 'bureau')->get();

        return view('site.pages.reception', compact('daysOfWeek', 'timeSlots', 'bureaux', 'schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storereception_scheduleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(reception_schedule $reception_schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reception_schedule $reception_schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatereception_scheduleRequest $request, reception_schedule $reception_schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reception_schedule $reception_schedule)
    {
        //
    }
}
