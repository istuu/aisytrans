<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreatePackagesClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('location_id')->nullable();
            $table->string('title', 100);
            $table->text('description')->nullable();
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
        Schema::drop('packages');
    }
}