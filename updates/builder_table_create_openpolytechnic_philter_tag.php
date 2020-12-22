<?php namespace Whitecliffe\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWhitecliffePhilterTag extends Migration
{
    public function up()
    {
        Schema::create('whitecliffe_philter_tag', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('tag');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('whitecliffe_philter_tag');
    }
}
