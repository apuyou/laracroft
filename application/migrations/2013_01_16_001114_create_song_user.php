<?php

class Create_Song_User {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::table('song_user', function($table)
      {
          $table->create();
          $table->increments('id');
          $table->integer('song_id');
          $table->integer('user_id');
          $table->integer('playcount');
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