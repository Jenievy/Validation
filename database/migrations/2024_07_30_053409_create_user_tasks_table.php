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
        Schema::create('user_tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('task_name')->nullable();
            $table->enum('status', ['Pending', 'On Process', 'Completed', 'Cancelled'])->nullable();
            $table->text('description')->nullable();
            $table->date('published_at')->nullable();
            $table->date('deadline')->nullable();
            $table->date('completed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_tasks');
    }
};
