<?php namespace Whitecliffe\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWhitecliffePhilterImage4 extends Migration
{
    public function up()
    {
        Schema::table('whitecliffe_philter_image', function($table)
        {
            $table->renameColumn('user_id', 'user');
        });
    }
    
    public function down()
    {
        Schema::table('whitecliffe_philter_image', function($table)
        {
            $table->renameColumn('user', 'user_id');
        });
    }
}
