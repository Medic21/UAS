<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gaji');
            $table->string('jabatan');
            $table->text('alamat');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};