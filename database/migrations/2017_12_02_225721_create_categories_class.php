<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCategoriesClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('icon', 100);
            $table->string('color', 100);
            $table->unsignedInteger('sequence');
            $table->char('is_active', 1)->default(0)->nullable();
            $table->datetime('create_on');
            $table->datetime('last_update')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }
}