<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourceRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cource_registration', function (Blueprint $table) {
            $table->id();
                $table->integer('cource_id');
                $table->integer('student_id');
                $table->tinyInteger('is_active', false, true)->default(1);
                $table->tinyInteger('is_deleted', false, true)->default(0);
                $table->integer('created_by');
                $table->integer('updated_by');
                $table->dateTime('created_at')->useCurrent();
                $table->dateTime('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cource_registration');
    }
}
