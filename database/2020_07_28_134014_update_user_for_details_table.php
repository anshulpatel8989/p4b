<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUserForDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
			$table->string('first_name')->change();
			$table->string('last_name')->change();
			$table->string('country_code',4)->change();
			$table->string('mobile',15)->unique()->change();          
			$table->tinyInteger('status', false, true);
			$table->tinyInteger('is_deleted', false, true);
			$table->integer('created_by');
			$table->integer('updated_by');
			$table->dateTime('created_at')->default(date("Y-m-d H:i:s"))->change();
			$table->dateTime('updated_at')->default(date("Y-m-d H:i:s"))->change();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            
			$table->string('first_name');
			$table->string('last_name');
			$table->string('country_code');
			$table->string('mobile');          
			$table->string('status');
        });
    }
}
