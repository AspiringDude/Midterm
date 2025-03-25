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
        Schema::create('departments', function (Blueprint $table)
        {
            $table->integer('department_id')->primary();
            $table->integer('college_id');
            $table->foreign('college_id')->references('college_id')->on('colleges')->onDelete('cascade');
            $table->string('department_name');
            $table->string('department_code')->unique();
            $table->boolean('is_active')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};