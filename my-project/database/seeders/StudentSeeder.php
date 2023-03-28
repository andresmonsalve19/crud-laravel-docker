<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student = new Student();
        $student->apellido = 'Monsalve';
        $student->direccion = 'Calle 66 #43-86';
        $student->nombre = 'Jaime';
        $student->num_doc = '1001025017';
        $student->telefono = '3007242377';
        $student->save();
    }
}
