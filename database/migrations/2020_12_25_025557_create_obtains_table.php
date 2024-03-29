<?php

use App\Models\Obtain;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObtainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obtains', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->text('address');
            $table->string('phone');
            $table->text('symtoms');


            $table->enum('status_symtoms',[Obtain::slight,Obtain::moderate,Obtain::major])->default(Obtain::slight);
            $table->enum('status_request',[Obtain::request,Obtain::inprocess,Obtain::complete])->default(Obtain::request);


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
        Schema::dropIfExists('obtains');
    }
}
