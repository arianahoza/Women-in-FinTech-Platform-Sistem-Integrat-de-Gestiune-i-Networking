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
       Schema::create('members', function (Blueprint $table) {
        $table->id(); // Coloana: id

        $table->string('name'); // Coloana: name
        $table->string('email')->unique(); // Coloana: email (Obligatoriu unic) 
        $table->string('profession'); // Coloana: profession
        $table->string('company')->nullable(); // Coloana: company (Opțional)
        $table->string('linkedin_url')->nullable(); // Coloana: linkedin_url (Opțional)

        // Coloana: status (Valori active/inactive, implicit 'active') 
        $table->enum('status', ['active', 'inactive'])->default('active'); 

        $table->timestamps(); // Coloanele: created_at și updated_at
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
