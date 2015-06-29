<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddParentCommentId extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comments', function(Blueprint $table)
		{
			//
            $table->integer( 'parent_id' )->unsigned();
            /*$table->foreign( 'parent_id' )
                    ->references( 'id' )
                    ->on( 'comments' )
                    ->onDelete( 'cascade' );*/
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comments', function(Blueprint $table)
		{
			//
            $table->removeColumn( 'parent_id' );
		});
	}

}
