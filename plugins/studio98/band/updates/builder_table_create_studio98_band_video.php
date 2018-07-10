<?php namespace Studio98\Band\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStudio98BandVideo extends Migration
{
    public function up()
    {
        Schema::create('studio98_band_video', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('resume');
            $table->text('link');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('studio98_band_video');
    }
}
