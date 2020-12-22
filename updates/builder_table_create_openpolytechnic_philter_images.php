<?php namespace Whitecliffe\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWhitecliffePhilterImages extends Migration
{
    public function up()
    {
        Schema::create('whitecliffe_philter_images', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('whitecliffe_philter_images');
    }
}
