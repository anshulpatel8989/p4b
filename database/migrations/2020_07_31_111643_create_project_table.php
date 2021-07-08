<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id();
                $table->integer('ref_id');
                $table->tinyInteger('language_id', false, true);
                $table->integer('client_id');
                $table->string('name');
                $table->string('image');
                $table->string('details');
                $table->string('website');
                $table->string('mobile');
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
        Schema::dropIfExists('project');
    }
}
