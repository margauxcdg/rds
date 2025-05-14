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
        Schema::table('request', function (Blueprint $table) {
            $table->string('personnel_name')->nullable();
            $table->text('other_equipments')->nullable();
            $table->string('status')->default('Open')->change();
        });
    }

    public function down()
    {
        Schema::table('request', function (Blueprint $table) {
            $table->dropColumn(['personnel_name', 'other_equipments']);
        });
    }

};
