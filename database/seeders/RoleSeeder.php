<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $role = [
        ['role_title'=>'admin','created_at'=>carbon::now(),'updated_at'=>carbon::now()],
        ['role_title'=>'doctor','created_at'=>carbon::now(),'updated_at'=>carbon::now()],
        ['role_title'=>'patient','created_at'=>carbon::now(),'updated_at'=>carbon::now()],
       ];
       Role::insert($role);
    }
}
