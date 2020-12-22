<?php namespace Whitecliffe\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWhitecliffePhilterImage2 extends Migration
{
    public function up()
    {
        Schema::table('whitecliffe_philter_image', function($table)
        {
            $table->string('description', 191)->default(null)->change();
            $table->integer('user_id')->default(null)->change();
            $table->dropColumn('image');
        });
    }
    
    public function down()
    {
        Schema::table('whitecliffe_philter_image', function($table)
        {
            $table->string('description', 191)->default('NULL')->change();
            $table->integer('user_id')->default(NULL)->change();
            $table->binary('image')->nullable()->default('NULL');
        });
    }
}
