<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class TestimialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $re = Validator::make(
            $request->all(),
            [

                'phone' => ['required'],
                'fullname' => ['required', 'string'],
                'message' => ['required', 'string'],
            ]
        );
        if ($re->passes()) {
            $rep = Testimonial::create(
                [
                    "phone" => $request->phone,
                    "fullname" => $request->fullname,
                    "body" => $request->message,
                    "email" => $request->email,
                    "type" => 'Bunda21',
                    "is_active" => 1,
                ]
            );
            if ($rep) {
                return response()->json(
                    [
                        'reponse' => true,
                        'msg' => 'Message envoyé avec succès',
                    ]
                );
            } else {
                return response()->json(
                    [
                        'reponse' => false,
                        'msg' => 'Erreur',
                    ]
                );
            }
        } else {
            return response()->json(
                [
                    'reponse' => false,
                    'msg' => $re->errors()->first(),
                ]
            );
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
