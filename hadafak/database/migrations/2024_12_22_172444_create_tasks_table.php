<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // الرقم الفريد لكل مهمة
            $table->foreignId('goal_id')->constrained()->onDelete('cascade'); // ربط المهمة بهدف
            $table->string('title'); // عنوان المهمة
            $table->integer('time_allocated'); // الوقت المخصص بالدقائق
            $table->boolean('completed')->default(false); // حالة المهمة (مكتملة أو غير مكتملة)
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
        Schema::dropIfExists('tasks');
    }
}
