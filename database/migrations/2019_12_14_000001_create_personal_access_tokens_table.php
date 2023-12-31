<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('personal_access_tokens', function (Blueprint $table) {
        $table->id();
        $table->foreignId('tokenable_id');
        $table->string('tokenable_type', 191);
        $table->string('name');
        $table->text('abilities');
        $table->timestamp('last_used_at')->nullable();
        $table->timestamps();

        $table->unique(['tokenable_id', 'name']);

    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
    }
}
