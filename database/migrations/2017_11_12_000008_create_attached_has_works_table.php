<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachedHasWorksTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'attached_has_works';

    /**
     * Run the migrations.
     * @table attached_has_works
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('attached_id');
            $table->integer('works_id');

            $table->index(["works_id"], 'fk_attached_has_works_works1_idx');

            $table->index(["attached_id"], 'fk_attached_has_works_attached_idx');


            $table->foreign('attached_id', 'fk_attached_has_works_attached_idx')
                ->references('id')->on('attached')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('works_id', 'fk_attached_has_works_works1_idx')
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
