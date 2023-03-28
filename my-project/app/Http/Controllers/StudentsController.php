<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class StudentsController extends Controller
{
    public function index(Request $request): JsonResponse {
        return response()->json([Student::all()]);
    }

    public function show(int $id): JsonResponse {
        return response()->json([Student::findOrFail($id)]);
    }

    public function destroy(int $id): JsonResponse {
        return response()->json([Student::findOrFail($id)->delete(), 204]);
    }
    public function store(Request $request): JsonResponse {
        $student = new Student();
        $student->apellido = $request->apellido;
        $student->direccion = $request->direccion;
        $student->nombre = $request->nombre;
        $student->num_doc = $request->num_doc;
        $student->telefono = $request->telefono;
        $student->save();
        return response()->json($student);
    }
    public function update(Request $request, int $id): JsonResponse {
        $student = Student::findOrFail($id);
        $student->apellido = $request->apellido;
        $student->direccion = $request->direccion;
        $student->nombre = $request->nombre;
        $student->num_doc = $request->num_doc;
        $student->telefono = $request->telefono;
        $student->save();
        return response()->json($student);
    }

}
