<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Course;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->string('name',90);
            $table->integer('duration');
            $table->text('description',200);
            $table->enum('status',[Course::BORRADOR, Course::REVISION,Course::PUBLICADO])->default(Course::BORRADOR);
            $table->string('slug');
            $table->string('url_meet');
            $table->float('price');
            $table->dateTime('fecha_init');
            $table->dateTime('fecha_end');
            
           
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('event_id')->nullable();
            $table->unsignedBigInteger('decanatura_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('set null');
            $table->foreign('decanatura_id')->references('id')->on('decanaturas')->onDelete('set null');

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
        Schema::dropIfExists('courses');
    }
};
