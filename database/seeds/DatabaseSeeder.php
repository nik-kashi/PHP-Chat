<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            array(
                'email' => 'john@domain.com',
                'name' => 'John'
            )
        );

        DB::table('users')->insert(
            array(
                'email' => 'mace@domain.com',
                'name' => 'Mason'
            )
        );

        DB::table('users')->insert(
            array(
                'email' => 'shawn@domain.com',
                'name' => 'Shawn'
            )
        );
    }
}
