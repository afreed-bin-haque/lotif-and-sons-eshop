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
        Schema::create('visitor_grocery_list_uploads', function (Blueprint $table) {
            $table->id();
            $table->string('serial')->nullable();
            $table->string('main_img')->nullable();
            $table->string('phone')->nullable();
            $table->longText('address')->nullable();
            $table->string('zone')->nullable();
            $table->longText('date')->nullable();
            $table->double('total_cost')->nullable();
            $table->string('payment_method')->default('Cash on delivery');
            $table->string('payment_status')->nullable();
            $table->string('picked_by')->nullable();
            $table->string('status')->default('Unprocessed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_grocery_list_uploads');
    }
};
