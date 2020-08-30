<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('email');
            $table->timestamps();
        });


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


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
