<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('exam_fees', function (Blueprint $table) {
        $table->id();
        $table->decimal('amount', 10, 2);
        $table->string('exam_name');
        $table->string('transaction_number');
        $table->string('student_name');
        $table->string('class_name');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_fees');
    }
};
