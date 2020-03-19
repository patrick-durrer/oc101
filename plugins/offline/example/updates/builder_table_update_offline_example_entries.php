<?php namespace OFFLINE\Example\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOfflineExampleEntries extends Migration
{
    public function up()
    {
        Schema::table('offline_example_entries', function($table)
        {
            $table->integer('sort_order')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('offline_example_entries', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
