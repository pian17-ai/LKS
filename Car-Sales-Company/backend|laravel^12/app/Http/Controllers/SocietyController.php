<?php

namespace App\Http\Controllers;

use App\Http\Requests\Society\SocietyRegisterRequest;
use App\Http\Resources\Regional\RegionalResource;
use App\Http\Resources\Society\SocietyLoginResource;
use App\Models\Region;
use App\Models\Society;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SocietyController extends Controller
{
    public function register(SocietyRegisterRequest $request)
    {
        $validated = $request->validated();

        $society = Society::create([
            'id_card_number' => $validated['id_card_number'],
            'password' => Hash::make($validated['password']),
            'name' => $validated['name'],
            'born_date' => $validated['born_date'],
            'gender' => $validated['gender'],
            'address' => $validated['address'],
            'regional_id' => $validated['regional_id']
        ]);

        $token = $society->createToken('auth-token')->plainTextToken;

        return response()->json([
            'message' => 'register success',
            'token' => $token,
            'data' => $society
        ], 201);
    }

    public function login(Request $request) {
        $validated = $request->validate([
            'id_card_number' => 'required',
            'password' => 'required'
        ]);

        $society = Society::where('id_card_number', $request->id_card_number)->first();

        if (!$society | !Hash::check($request->password, $society->password)) {
            return response()->json([
                'message' => 'ID Card Number or Password incorrect'
            ], 401);
        }

        $token = $society->createToken('auth-token')->plainTextToken;
        
        $society->load('regional');

        return new SocietyLoginResource($society, $token);
    }

    public function logout(Request $request) {
        $user = $request->user();

        $user->tokens()->delete();

        return response()->json([
            'message' => 'Logout success'
        ], 200);
    }
}
