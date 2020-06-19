<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('title')->nullable();
            $table->text('abstract')->nullable();
            $table->mediumText('introduction')->nullable();
            $table->mediumText('methods')->nullable();
            $table->longText('contents_article')->nullable();
            $table->text('table_contents')->nullable();
            $table->text('results')->nullable();
            $table->text('discussion')->nullable();
            $table->mediumText('reference')->nullable();
            $table->mediumText('appendics')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
