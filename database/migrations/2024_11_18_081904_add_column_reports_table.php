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
        Schema::table('reports', function(Blueprint $table){
            $table->string('report_name')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_handled')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('details', function(Blueprint $table){
            $table->dropColumn('task_link')->nullable();
        });
    }
};
