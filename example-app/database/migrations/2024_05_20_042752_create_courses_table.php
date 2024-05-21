<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->string('courseid', 50)->primary();
            $table->string('studentid', 50);
            $table->text('coursetitle');
            $table->text('coursedescription');
            $table->timestamps();

            $table->foreign('studentid')->references('studentid')->on('students')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
