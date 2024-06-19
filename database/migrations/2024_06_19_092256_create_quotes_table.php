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
    Schema::create('quotes', function (Blueprint $table) {
      $table->id();
      $table->string('full_name');
      $table->string('email');
      $table->string('project_title');
      $table->string('phone');
      $table->string('description');
      $table->string('budget');
      $table->boolean('has_response')->default(false);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('quotes');
  }
};
