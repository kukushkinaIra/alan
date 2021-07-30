<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('number');
            $table->string('price');
            $table->timestamps();
        });

        $data = [
            [
                'name' => 'Chocolate',
                'number' => 1,
                'price' => '12$'
            ],

            [
                'name' => 'Meat',
                'number' => 2,
                'price' => '80$'
            ]
        ];

        foreach ($data as $single){
            \App\Models\Card::create($single);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
