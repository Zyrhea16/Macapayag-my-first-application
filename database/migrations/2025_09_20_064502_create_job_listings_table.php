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
    Schema::create('job_listings', function (Blueprint $table) { 
        $table->id(); 
        $table->foreignId('employer_id')->nullable();
        $table->string('title')->nullable();
        $table->string('salary')->nullable();
        $table->timestamps(); 
    }); 
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');

        Schema::table('job_listings', function (Blueprint $table) {
        $table->foreignId('employer_id')->nullable()->change();
});
    }
};
