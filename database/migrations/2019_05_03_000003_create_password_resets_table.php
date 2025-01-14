<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordResetsTable extends Migration
{
    public $tableName = 'password_resets';

    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('token');
            $table->timestamp('created_at')->nullable()->default(null);

            $table->index(['email'], 'password_resets_email_index');
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
