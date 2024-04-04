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
        Schema::create('projects', function (Blueprint $table) {
            $table->increments("pid");
            $table->string("title", length: 100);
            $table->date("start_date")->nullable($value = true);
            $table->date("end_date")->nullable($value = true);
            $table->enum("phase", ["design", "development", "testing", "deployment", "complete"])->nullable($value = true);
            $table->string("description", length: 500)->nullable($value = true);
            $table->unsignedBigInteger("uid");
            $table->foreign("uid")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
