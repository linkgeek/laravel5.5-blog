<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function(Blueprint $table)
		{
            $table->increments('id')->comment('分类主键id');
			$table->string('name', 15)->default('')->comment('分类名称');
			$table->string('keywords')->default('')->comment('关键词');
			$table->string('description')->default('')->comment('描述');
			$table->boolean('sort')->default(0)->comment('排序');
			$table->boolean('pid')->default(0)->comment('父级栏目id');
			$table->integer('is_show')->default(1)->comment('是否显示');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('categories');
	}

}
