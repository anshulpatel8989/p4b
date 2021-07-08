<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateStudentTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('student', function (Blueprint $table) {
                $table->id();
                $table->integer('ref_id');
                $table->tinyInteger('language_id', false, true);
                $table->string('name');
                $table->string('image');
                $table->string('university');
                $table->string('degree');
                $table->string('address');
                $table->string('lat')->default('');
                $table->string('lng')->default('');
                $table->string('grade');
                $table->string('email');
                $table->string('country_code', 4);
                $table->string('mobile', 15)->unique();
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
        public function down() {
            Schema::dropIfExists('student');
        }

    }
    