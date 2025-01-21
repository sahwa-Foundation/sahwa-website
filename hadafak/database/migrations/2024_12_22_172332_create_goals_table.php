<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals', function (Blueprint $table) {
            $table->id(); // الرقم الفريد لكل هدف
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // ربط الهدف بمستخدم
            $table->string('title'); // عنوان الهدف
            $table->text('description')->nullable(); // وصف الهدف
            $table->timestamp('start_time')->nullable(); // وقت البدء
            $table->timestamp('end_time')->nullable(); // وقت الانتهاء
            $table->timestamps(); // وقت الإنشاء والتحديث
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goals');
    }
}
