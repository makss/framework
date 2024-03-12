<?php

use Illuminate\Database\Migrations\Migration;

return new class() extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        echo 'Run migration 2. (several _OTHER_ SQL commands are executed)';
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        echo 'Reverse migration 2';
    }
};
