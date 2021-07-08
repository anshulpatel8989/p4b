<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateUsersTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('first_name');
                $table->string('last_name');
                $table->string('country_code', 4);
                $table->string('mobile', 15)->unique();
                $table->tinyInteger('is_active', false, true);
                $table->tinyInteger('is_deleted', false, true);
                $table->integer('created_by');
                $table->integer('updated_by');
                $table->dateTime('created_at')->useCurrent();
                $table->dateTime('updated_at')->useCurrent();
                //$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
                //$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
                $table->string('email')->unique();
                $table->dateTime('email_verified_at')->nullable();
                $table->string('password');
                $table->rememberToken();
                // $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists('users');
        }

    }
    