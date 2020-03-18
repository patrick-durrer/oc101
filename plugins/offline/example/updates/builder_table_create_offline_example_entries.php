<?php namespace OFFLINE\Example\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOfflineExampleEntries extends Migration
{
    public function up()
    {
        Schema::create('offline_example_entries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('offline_example_entries');
    }
}
