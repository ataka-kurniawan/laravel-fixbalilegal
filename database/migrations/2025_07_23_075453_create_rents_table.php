<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->string('name');
            $table->string('slug')->unique();
            $table->enum('type', ['mobil', 'motor']);
            $table->string('brand');
            $table->string('plate')->unique(); // Nomor plat kendaraan harus unik
            $table->decimal('price', 10, 2); // Harga maksimal 99999999.99
            $table->text('description'); // Lebih fleksibel dari string
            $table->string('image'); 
            $table->enum('status', ['tersedia', 'disewa', 'maintenance'])->default('tersedia');

            $table->timestamps();

            // Optional: indexing for faster search
            $table->index(['type', 'brand']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rents');
    }
};
