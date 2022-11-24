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
        Schema::create('mst_courses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('department_id')->unsigned()->comment('学部ID');
            $table->string('name')->comment('授業名');
            $table->softDeletes();
            $table->timestamps();

            // relation
            $table->foreign('department_id')
                ->references('id')
                ->on('mst_departments')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_courses');
    }
};
