<?php

namespace App\Http\Controllers;

use App\Nhanvien;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class NhanvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Nhanvien::all();
        return response()->json([
            'error' => false,
            'nhanvien' => $data,
        ], 200);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->input(), array(
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
        ));

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'messages' => $validator->errors(),
            ], 422);
        }

        $nhanvien = Nhanvien::create($request->all());

        return response()->json([
            'error' => false,
            'nhanvien' => $nhanvien,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Nhanvien $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nhanvien = Nhanvien::find($id);

        return response()->json([
            'error' => false,
            'nhanvien' => $nhanvien,
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Nhanvien $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function edit(Nhanvien $nhanvien)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Nhanvien $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->input(), array(
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
        ));

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'messages' => $validator->errors(),
            ], 422);
        }

        $nhanvien = Nhanvien::find($id);

        $nhanvien->name = $request->input('name');
        $nhanvien->phone = $request->input('phone');
        $nhanvien->email = $request->input('email');
        $nhanvien->address = $request->input('address');

        $nhanvien->save();

        return response()->json([
            'error' => false,
            'nhanvien' => $nhanvien,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Nhanvien $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nhanvien = Nhanvien::destroy($id);

        return response()->json([
            'error' => false,
            'nhanvien' => $nhanvien,
        ], 200);
    }
}
