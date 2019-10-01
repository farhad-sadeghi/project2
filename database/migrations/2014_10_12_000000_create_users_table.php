<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ninja_code',13)->unique();
            $table->string('password');
            $table->string('birth_certificate',20)->unique();
            $table->string('nation_certificate',20)->unique();
            $table->string('name',40);

            $table->string('job',40);
            $table->string('birthday',30);
            $table->string('education',30);
            $table->string('wife_education',30)->nullable();
            $table->string('child_number',30)->nullable();
            $table->string('home_number',30);
            $table->string('phone_number',30);
            $table->string('work_number',30)->nullable();
            $table->text('home_address');
            $table->text('job_address')->nullable();

            $table->text('why')->nullable();  /*برای ذکر دلیل عدم تایید*/
            $table->string('sick')->nullable();
            $table->string('body_problem')->nullable();
            $table->string('state',30);
            $table->string('height',30);
            $table->string('image');
            $table->string('nation_image');
            $table->string('ninja_image');
            $table->string('sanguis',20);
            $table->string('father_name',40);
            $table->string('mother_name',40);
            $table->string('father_job',40);
            $table->string('mother_job',40);
            $table->string('father_education',40);
            $table->string('mother_education',40);
            $table->boolean('father_death');
            $table->boolean('mother_death');
            $table->boolean('single');
            $table->tinyInteger('status');
            $table->integer('admin_id')->unsigned()->index();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('users');
    }
}
