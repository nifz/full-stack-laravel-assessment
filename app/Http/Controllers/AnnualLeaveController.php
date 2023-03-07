<?php

namespace App\Http\Controllers;

use App\AnnualLeave;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AnnualLeaveController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $annualLeave = DB::Table('annual_leaves')
        ->join('users', 'users.id', 'annual_leaves.user_id')
        ->select('annual_leaves.user_id', DB::raw('JSON_OBJECT("id", users.id, "name", users.name, "email", users.email) AS users'))
        ->get();
        
        return response()->json(['data' => $annualLeave], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'date_leave' => 'required|date',
            'days' => 'required|number',
            'description' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),500);
        }
        $annualLeave = AnnualLeave::create([
            'user_id' => $request->user_id,
            'date_leave' => $request->date_leave,
            'days' => $request->days,
            'description' => $request->description,
        ]);
        return response()->json([
            'data' => $annualLeave,
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AnnualLeave  $annualLeave
     * @return \Illuminate\Http\Response
     */
    public function show(AnnualLeave $annualLeave)
    {
        //

        $annualLeave = DB::Table('annual_leaves')
        ->join('users', 'users.id', 'annual_leaves.user_id')
        ->select('annual_leaves.user_id', DB::raw('JSON_OBJECT("id", users.id, "name", users.name, "email", users.email) AS users'))
        ->get();
        return response()->json(['data' => $annualLeave]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AnnualLeave  $annualLeave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnnualLeave $annualLeave)
    {
        //
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 500);
        }
        $annualLeave->user_id = $request->user_id;
        $annualLeave->date_leave = $request->tanggal_cuti;
        $annualLeave->days = $request->jumlah_hari;
        $annualLeave->description = $request->keterangan;
        $annualLeave->save();
        return response()->json(['data' => $annualLeave],200);
    }
}
