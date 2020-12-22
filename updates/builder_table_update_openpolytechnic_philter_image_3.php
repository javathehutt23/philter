<?php namespace Whitecliffe\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWhitecliffePhilterImage3 extends Migration
{
    public function up()
    {
        Schema::table('whitecliffe_philter_image', function($table)
        {
            $table->dropColumn('file_path');
        });
    }
    
    public function down()
    {
        Schema::table('whitecliffe_philter_image', function($table)
        {
            $table->string('file_path', 191);
        });
    }
}
