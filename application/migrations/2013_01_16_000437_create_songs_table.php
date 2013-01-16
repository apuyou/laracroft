<?php

class Create_Songs_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::table('songs', function($table)
    {
        $table->create();
        $table->increments('id');
        $table->string('name');
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
		Schema::drop('songs');
	}

}