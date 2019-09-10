<?php

use App\Level;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->string('slug');
        });

        // Insert some data
         DB::table('levels')->insert(
             array(
            ['name' => 'First Year', 'slug' => 'LEVEL 200'],
            ['name' => 'Second Year', 'slug' => 'LEVEL 300'],
            ['name' => 'Third Year', 'slug' => 'LEVEL 400'],
            ['name' => 'Fourth Year', 'slug' => 'LEVEL 500'],

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
        Schema::dropIfExists('levels');
    }
}
