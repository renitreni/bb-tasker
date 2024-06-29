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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('title');// 'title',
            $table->text('bill_from');// 'bill_from',
            $table->text('bill_to');// 'bill_to',
            $table->string('invoice_number');// 'invoice_number',
            $table->date('invoice_date'); // 'invoice_date',
            $table->date('due_date');// 'due_date',
            $table->string('account_name');// 'account_name',
            $table->string('account_number'); // 'account_number',
            $table->string('bank_name');// 'bank_name',
            $table->text('bank_address');// 'bank_address',
            $table->text('terms_condition');// 'terms_condition'
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
