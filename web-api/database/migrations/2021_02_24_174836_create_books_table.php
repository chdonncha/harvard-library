<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('Books', function (Blueprint $table) {
            $table->datetime('created')->nullable()->default('NULL');
            $table->datetime('modified')->nullable()->default('NULL');
            $table->string('baseUrl',512)->nullable()->default('NULL');
            $table->string('collectionUrn',512)->nullable()->default('NULL');
            $table->string('contactDepartment',512)->nullable()->default('NULL');
            $table->string('contactName',50)->nullable()->default('NULL');
            $table->tinyInteger('dcp',1)->nullable()->default('NULL');
            $table->integer('systemId',11);
            $table->tinyInteger('public',1)->nullable()->default('NULL');
            $table->string('setDescription',512)->nullable()->default('NULL');
            $table->string('setName',512)->nullable()->default('NULL');
            $table->string('setSpec',50)->nullable()->default('NULL');
            $table->string('thumbnailUrn',512)->nullable()->default('NULL');
            $table->datetime('updated_at')->nullable()->default('NULL');
            $table->datetime('created_at')->nullable()->default('NULL');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Books');
    }
}