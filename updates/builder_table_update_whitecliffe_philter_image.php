<?php namespace Whitecliffe\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWhitecliffePhilterImage extends Migration
{
    public function up()
    {
        Schema::table('whitecliffe_philter_image', function($table)
        {
            $table->binary('image')->nullable();
            $table->string('description', 191)->default(null)->change();
            $table->integer('user_id')->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('whitecliffe_philter_image', function($table)
        {
            $table->dropColumn('image');
            $table->string('description', 191)->default('NULL')->change();
            $table->integer('user_id')->default(NULL)->change();
        });
    }
}
