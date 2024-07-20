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
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'username')) {
                $table->dropColumn('username');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
   public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username'); // Pastikan tipe data sesuai dengan kolom yang dihapus
        });
    }
};
