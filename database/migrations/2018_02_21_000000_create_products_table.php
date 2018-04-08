<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('dim_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->default(1);
            $table->integer('publisher_id');
            $table->string('image')->nullable();
            $table->string('product_code')->nullable();
            $table->longText('name');
            $table->longText('description');
            $table->dateTime('release_date');
            $table->dateTime('initial_purchase_date');
            $table->integer('cost');
            $table->boolean('is_stock_control')->default(1);
            $table->boolean('is_serial_control')->default(0);
            $table->boolean('sales_tax')->default(0);
            $table->decimal('weight', 8, 2);
            $table->decimal('width', 8, 2);
            $table->decimal('height', 8, 2);
            $table->decimal('depth', 8, 2);
            $table->string('genre', 200)->nullable();
            $table->string('number_of_player');
            $table->integer('minimum_stock');
            $table->string('rating');
            $table->decimal('import_duty', 8, 2);
            $table->integer('aging_alert')->nullable();
            $table->enum('warranty', [
                '7 DAYS',
                '30DAYS',
                '3 MONTHS',
                '6MONTHS',
                '12MONTHS',
                '16MONTHS',
                '24MONTHS',
                '36MONTHS'
            ])->nullable();
            $table->longText('pre_order_gifts')->nullable();
            $table->longText('other')->nullable();
            // $table->enum('online', ['online', 'offline'])->default('offline');
            // $table->enum('status', ['ON', 'OFF'])->default('ON');
            $table->timestamps();
            $table->softDeletes();
        });

        // Migrate fact
        $this->factProduct();

        // Migrate fact
        $this->factCategory();
        $this->factTag();
        $this->factPlatform();
        $this->factEdition();
        $this->factZone();
        $this->factCustomerTier();
        $this->factUnit();
        $this->factSubtitle();
        $this->factNaration();
        $this->factPremium();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dim_products');
        Schema::dropIfExists('fact_products');
    }

    /**
    */
    public function factProduct()
    {
        Schema::create('fact_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('category_id')->nullable();
            $table->integer('platform_id')->nullable();
            $table->integer('edition_id')->nullable();
            $table->integer('zone_id')->nullable();
            $table->integer('customer_tier_id')->nullable();
            $table->integer('unit_id')->nullable();
            $table->integer('subtitle_id')->nullable();
            $table->integer('narration_id')->nullable();
            $table->integer('premium_id')->nullable();
            $table->enum('status', ['ON', 'OFF'])->default('ON');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function factCategory()
    {
        Schema::dropIfExists('fact_categorys');
        Schema::create('fact_categorys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->nullable();
            $table->integer('product_id')->nullable();
        });
    }

    public function factTag()
    {
        Schema::dropIfExists('fact_tags');
        Schema::create('fact_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tag_id')->nullable();
            $table->integer('product_id')->nullable();
        });
    }

    public function factPlatform()
    {
        Schema::dropIfExists('fact_platforms');
        Schema::create('fact_platforms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('platform_id')->nullable();
            $table->integer('product_id')->nullable();
        });
    }

    public function factEdition()
    {
        Schema::dropIfExists('fact_editions');
        Schema::create('fact_editions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('edition_id')->nullable();
            $table->integer('product_id')->nullable();
        });
    }

    public function factZone()
    {
        Schema::dropIfExists('fact_zones');
        Schema::create('fact_zones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('zone_id')->nullable();
            $table->integer('product_id')->nullable();
        });
    }

    public function factCustomerTier()
    {
        Schema::dropIfExists('fact_customer_tier');
        Schema::create('fact_customer_tier', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_tier_id')->nullable();
            $table->integer('product_id')->nullable();
        });
    }

    public function factUnit()
    {
        Schema::dropIfExists('fact_units');
        Schema::create('fact_units', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unit_id')->nullable();
            $table->integer('product_id')->nullable();
        });
    }


    public function factSubtitle()
    {
        Schema::dropIfExists('fact_subtitles');
        Schema::create('fact_subtitles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subtitle_id')->nullable();
            $table->integer('product_id')->nullable();
        });
    }

    public function factNaration()
    {
        Schema::dropIfExists('fact_narrations');
        Schema::create('fact_narrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('narration_id')->nullable();
            $table->integer('product_id')->nullable();
        });
    }

    public function factPremium()
    {
        Schema::dropIfExists('fact_premiums');
        Schema::create('fact_premiums', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('premium_id')->nullable();
            $table->integer('product_id')->nullable();
        });
    }
}
