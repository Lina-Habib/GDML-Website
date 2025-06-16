<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // اسم الدالة (مثل |x|)
            $table->string('image_path'); // رابط الصورة
            $table->string('domain'); // المجال
            $table->string('range'); // المدى
            $table->string('color'); // لون البطاقة (مثل red, green)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
