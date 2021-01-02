<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee')->delete();
        $json = File::get('database/data/data.json');
        $data = json_decode($json);
        foreach ($data as $obj){
            Employee::create(array(
                'name' => $obj->name,
                'email' => $obj->email,
                'department' => $obj->department,
                'password' => $obj->password
            ));
        }
    }
}
