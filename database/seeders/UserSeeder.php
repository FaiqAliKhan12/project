<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            ['role_id'=>1, 'depart_id'=>2, 'name'=> 'Faiq Ali khan ','email'=>'faiqali@gmail.com','address'=>'Karachi','phone'=>'0335-1353953','password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','created_at'=>carbon::now(),'updated_at'=>carbon::now()],
            ['role_id'=>2, 'depart_id'=>2, 'name'=> 'Dr Adnan','email'=>'adnan@gmail.com','address'=>'Karachi','phone'=>'0335-1353953','password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','created_at'=>carbon::now(),'updated_at'=>carbon::now()],
            ['role_id'=>3, 'depart_id'=>2, 'name'=> 'Mr Muzzammil','email'=>'muzzammil@gmail.com','address'=>'Karachi','phone'=>'0335-1353953','password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','created_at'=>carbon::now(),'updated_at'=>carbon::now()]
        ];
        User::insert($user);
    }
}
