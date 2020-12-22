<?php namespace Whitecliffe\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWhitecliffePhilterImage extends Migration
{
    public function up()
    {
        Schema::rename('whitecliffe_philter_images', 'whitecliffe_philter_image');
        Schema::table('whitecliffe_philter_image', function($table)
        {
            $table->string('name')->change();
            $table->string('description')->change();
            $table->string('filter')->change();
        });
    }
    
    public function down()
    {
        Schema::rename('whitecliffe_philter_image', 'whitecliffe_philter_images');
        Schema::table('whitecliffe_philter_images', function($table)
        {
            $table->string('name', 191)->change();
            $table->string('description', 191)->change();
            $table->string('filter', 191)->change();
        });
    }
}
