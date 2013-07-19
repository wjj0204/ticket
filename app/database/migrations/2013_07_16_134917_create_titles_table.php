<?php

use Illuminate\Database\Migrations\Migration;

class CreateTitlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('titles', function($table)
        {
            $table->increments('id');
            $table->integer('job_id')->unsigned();
            $table->integer('member_id')->unsigned();
            $table->string('title');
            $table->text('content');
            $table->string('file');
            $table->timestamp('start_time');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('titles');
	}

}