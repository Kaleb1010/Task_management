<?php

namespace Database\Seeders;

use App\Models\Daily;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DailySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dailies')->delete();
        $json = File::get('database/data/report.json');
        $data = json_decode($json);
        foreach ($data as $obj){
            Daily::create(array(
                'username' => $obj->username,
                'department' => $obj->department,
                'company_name' => $obj->company_name,
                'email' => $obj->email,
                'contact_name' => $obj->contact_name,
                'job_description' => $obj->job_description,
                'status' => $obj->status,
                'comments' => $obj->comments,
            ));
        }
    }
}
