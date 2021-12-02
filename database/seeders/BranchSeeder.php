<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $insert = [
            // [
            //     'name' => 'Mumbai',
            //     'sort' => 1,
            // ],
            // [
            //     'name' => 'Nepal',
            //     'sort' => 2,
            // ]
        //     ];


        //  $branch =   Branch::insert($insert);

        DB::table('branches')->insert([
            [
                'name' => 'Mumbai',
                'sort' => 1,
            ],
            [
                'name' => 'Nepal',
                'sort' => 2,
            ]
        ]);
    }
}
