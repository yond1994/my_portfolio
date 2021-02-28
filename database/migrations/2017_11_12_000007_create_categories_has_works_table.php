<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesHasWorksTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'categories_has_works';

    /**
     * Run the migrations.
     * @table categories_has_works
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('categories_id');
            $table->integer('works_id');

            $table->index(["works_id"], 'fk_categories_has_works_works1_idx');

            $table->index(["categories_id"], 'fk_categories_has_works_categories1_idx');


            $table->foreign('categories_id', 'fk_categories_has_works_categories1_idx')
                ->references('id')->on('categories')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('works_id', 'fk_categories_has_works_works1_idx')
                ->references('id')->on('works')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
