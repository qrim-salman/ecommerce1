<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('item_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->decimal('width', 11, 2);
            $table->decimal('height', 11, 2);
            $table->decimal('length', 11, 2);
            $table->decimal('weight', 11, 2);
            $table->bigInteger('price');
            $table->boolean('status')->default(false);
            $table->decimal('rates', 11, 2)->nullable();    
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('updated_by')
                ->references('id')
                ->on('admins')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
        $table->dropForeign('items_category_id_foreign');
        $table->dropForeign('items_stock_id_foreign');
        $table->dropForeign('items_updated_by_foreign');
    }
}
