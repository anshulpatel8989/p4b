<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->id();
                $table->integer('ref_id');
                $table->tinyInteger('language_id', false, true);
                $table->string('heading');
                $table->string('image');
                $table->string('details');
              
                $table->dateTime('event_date')->useCurrent();
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
        Schema::dropIfExists('event');
    }
}
