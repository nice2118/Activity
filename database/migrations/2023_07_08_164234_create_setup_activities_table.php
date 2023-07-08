<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setup_activities', function (Blueprint $table) {
            $table->id();
            $table->string('DefaultImageNews');
            $table->string('DefaultPathImageNews');
            // $table->string('DefaultPathImageNews')->unsigned()->change(); เมื่อต้องการลบให้เขียนแบบนี้ต่อท้าย
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setup_activities');
    }
};
