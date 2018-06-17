<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Config::get('ore.contract.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');

            foreach (Config::get('ore.contract.attributes') as $name => $attribute) {
                $table->string($name)->nullable();
            }

            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on(Config::get('ore.customer.table'));

            $table->float('price');
            $table->float('price_start');
            $table->float('price_end');
            $table->string('frequency_unit');
            $table->integer('frequency_value');
            $table->string('country');
            $table->string('locale');
            $table->string('currency');
            $table->text('notes');

            $table->integer('tax_id')->unsigned();
            $table->foreign('tax_id')->references('id')->on(Config::get('ore.tax.table'));

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
        Schema::dropIfExists(Config::get('ore.contract.table'));
    }
}
