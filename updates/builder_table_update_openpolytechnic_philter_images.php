<?php namespace Whitecliffe\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWhitecliffePhilterImages extends Migration
{
    public function up()
    {
        Schema::table('whitecliffe_philter_images', function($table)
        {
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('filter');
        });
    }
    
    public function down()
    {
        Schema::table('whitecliffe_philter_images', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('description');
            $table->dropColumn('user_id');
            $table->dropColumn('filter');
        });
    }
}
