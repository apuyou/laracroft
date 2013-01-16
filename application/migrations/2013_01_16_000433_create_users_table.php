<?php

class Create_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::table('users', function($table)
    {
        $table->create();
        $table->increments('id');
        $table->string('username');
        $table->string('email');
        $table->string('phone')->nullable();
        $table->text('about');
        $table->timestamps();
    });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}