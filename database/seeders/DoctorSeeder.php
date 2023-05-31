<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctor = [
            ['doctor_name'=>'Dr Adnan', 'depart_id'=>1,'created_at'=>carbon::now(),'updated_at'=>carbon::now()],
            ['doctor_name'=>'Dr Hamza', 'depart_id'=>6,'created_at'=>carbon::now(),'updated_at'=>carbon::now()],
            ['doctor_name'=>'Dr Mohsin', 'depart_id'=>2,'created_at'=>carbon::now(),'updated_at'=>carbon::now()],
            ['doctor_name'=>'Dr Ammad', 'depart_id'=>3,'created_at'=>carbon::now(),'updated_at'=>carbon::now()],
            ['doctor_name'=>'Dr Saeed', 'depart_id'=>4,'created_at'=>carbon::now(),'updated_at'=>carbon::now()],
            ['doctor_name'=>'Dr Sami-ullah', 'depart_id'=>5,'created_at'=>carbon::now(),'updated_at'=>carbon::now()],
           ];
           Doctor::insert($doctor);
    }
}
