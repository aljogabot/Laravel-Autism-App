<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dependents', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer( 'user_id' )
                  ->unsigned();

            $table->string( 'first_name' );
            $table->string( 'last_name' );
			$table->timestamps();


            $table->foreign( 'user_id' )
                ->references( 'id' )
                ->on( 'users' )
                ->onDelete( 'cascade' );
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dependents');
	}

}
