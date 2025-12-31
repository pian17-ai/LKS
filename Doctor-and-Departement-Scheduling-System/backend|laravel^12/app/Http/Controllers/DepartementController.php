<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartementController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->query(), [
            'page' => 'integer|min:0',
            'size' => 'integer|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()
            ], 400);
        }

        $page = $request->query('page', 0);
        $size = $request->query('size', 10);

        $departements = Departement::offset($page * $size) //new concept
            ->limit($size)
            ->get();

        return response()->json([
            'page' => $page,
            'size' => $size,
            'data' => $departements
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'departementId' => 'string|max:10|required',
            'name' => 'string|required',
            'description' => 'nullable|string'
        ]);

        $departement = Departement::create([
            'departement_id' => $validated['departementId'],
            'departement_name' => $validated['name'],
            'departement_description' => $validated['description'] ?? null
        ]);

        return response()->json([
            'message' => 'Departement created'
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $departement = Departement::where('departement_id', $id)->first();

        if (!$departement) {
            return response()->json([
                'message' => 'Departement not found'
            ], 404);
        }

        $validated = $request->validate([
            'name' => 'string|required',
            'description' => 'nullable|string'
        ]);

        $departement->update([
            'departement_name' => $validated['name'],
            'departement_description' => $validated['description'] ?? "",
        ]);

        return response()->json([
            'message' => 'Departement modified'
        ], 200);
    }

    public function delete(Request $request, $id)
    {
        $schedule = Schedule::where('departement_id', $id)->first();

        if ($schedule) {
            return response()->json([
                'message' => 'Departement cannot deleted'
            ], 404);
        }

        $departement = Departement::where('departement_id', $id)->first();

        if (!$departement) {
            return response()->json([
                'message' => 'Departement not found'
            ], 404);
        }

        $departement->delete();

        return response()->json([], 204);
    }
}
