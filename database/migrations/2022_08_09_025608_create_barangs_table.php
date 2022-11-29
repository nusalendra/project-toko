<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rak_id')->nullable();
            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->string('name');            
            $table->integer('stock');
            $table->integer('harga');            
            $table->text('deskripsi')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->foreign('rak_id')->references('id')->on('raks');          
            $table->foreign('kategori_id')->references('id')->on('kategoris');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
