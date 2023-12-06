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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
<<<<<<< Updated upstream
            $table->string('pemesan');
            $table->string('jasa');
            $table->string('penyedia');
            $table->dateTime('waktu');
            $table->string('alamatpemesan');
            $table->string('pembayaran');
            $table->string('bukti');
            $table->string('total');
            $table->string('status');
=======
            
>>>>>>> Stashed changes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
