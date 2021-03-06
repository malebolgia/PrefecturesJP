<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrefecturesTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
         public function up()
         {

            /**
             * Table: prefectures
             */
            Schema::create('prefectures', function($table) {
                $table->increments('id');
                $table->string('title', 255)->nullable();
                    $table->tinyInteger('status')->nullable();
    
                $table->string('slug', 100)->nullable();
                $table->integer('user_id')->nullable();
                $table->string('upload_folder', 100)->nullable();
                $table->softDeletes();
                $table->nullableTimestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
         public function down()
         {
                Schema::drop('prefectures');
         }

}