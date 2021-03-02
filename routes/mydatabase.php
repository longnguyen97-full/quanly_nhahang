<?php 
Route::get('database', function(){
	// Parent without child => ABOUT, GALLERY, SIDEBAR
	Schema::create('about', function ($table) {
		$table->Increments('id_about');
		$table->string('title');
		$table->text('content');
		$table->string('image');
		$table->timestamps();
	});
	Schema::create('gallery', function ($table) {
		$table->Increments('id_gallery');
		$table->string('image');
		$table->boolean('display');
		$table->boolean('homepage');
		$table->timestamps();
	});
	Schema::create('admin_sidebar', function ($table) {
		$table->Increments('id_sidebar');
		$table->string('title');
		$table->string('link');
		$table->string('image');
		$table->integer('parent_id');
		$table->integer('dropdown');
		$table->boolean('display');
		$table->timestamps();
	});
	Schema::create('visit', function ($table) {
		$table->Increments('id_visit');
		$table->integer('total_visit');
		$table->timestamps();
	});

	// Parents - main => MENU, DELIVERY, ACCOUNT
	Schema::create('menu', function ($table) {
		$table->Increments('id_menu');
		$table->string('name');
		$table->string('description');
		$table->string('image');
		$table->boolean('display');
		$table->boolean('homepage');
		$table->timestamps();
	});
	Schema::create('position', function ($table) {
		$table->Increments('id_position');
		$table->string('position');
		$table->timestamps();
	});

	// Parents - sub => GIFT CODE, PAYMENT METHOD, BLOG CATEGORY, COMMENT, BILL, WIDGET
	Schema::create('giftcode', function ($table) {
		$table->Increments('id_gcode');
		$table->string('giftcode');
		$table->date('start_date');
		$table->date('expiry_date');
		$table->string('description');
		$table->integer('discount');
		$table->boolean('discount_percent');
		$table->timestamps();
	});
	Schema::create('payment_method', function ($table) {
		$table->Increments('id_payment');
		$table->string('total_price');
		$table->string('payment_type');
		$table->string('payment_icon');
		$table->timestamps();
	});
	Schema::create('blog_category', function ($table) {
		$table->Increments('id_blg_cate');
		$table->string('blg_category');
		$table->boolean('display');
		$table->boolean('homepage');
		$table->timestamps();
	});
	Schema::create('comment', function ($table) {
		$table->Increments('id_comment');
		$table->string('content');
		$table->timestamps();
	});
	Schema::create('admin_widget', function ($table) {
        $table->Increments('id_widget');
		$table->string('title');
		$table->boolean('display');
		$table->timestamps();
	});
	Schema::create('table', function ($table) {
		$table->Increments('id_table');
		$table->boolean('status_table');
		$table->string('services');
		$table->string('view');
		$table->timestamps();
	});

	// parents + childs case 1 => CUSTOMER, ACCOUNT
	Schema::create('customer', function ($table) {
		$table->Increments('id_customer');
		$table->string('fullname');
		$table->string('address');
		$table->string('phone');
		$table->string('avatar');
		$table->string('email')->unique();
		$table->string('password');
		$table->integer('reward_point');
		$table->timestamps();
	});
	Schema::create('account', function ($table) {
		$table->Increments('id_account');
		$table->integer('id_position')->unsigned();
		$table->foreign('id_position')->references('id_position')->on('position');
		$table->string('username');
		$table->string('password');
		$table->integer('parent_id');
		$table->timestamps();
	});
	Schema::create('blog', function ($table) {
		$table->Increments('id_blog');
		$table->integer('id_blg_cate')->unsigned();
		$table->foreign('id_blg_cate')->references('id_blg_cate')->on('blog_category');
		$table->integer('id_account')->unsigned();
		$table->foreign('id_account')->references('id_account')->on('account');
		$table->string('title');
		$table->text('content');
		$table->string('image');
		$table->boolean('display');
		$table->boolean('homepage');
		$table->timestamps();
	});
	// parents + childs case 1 => CUSTOMER, ACCOUNT <= end

	// Childs - main => PRODUCT, EVENTS
	Schema::create('product', function ($table) {
		$table->Increments('id_product');
		$table->integer('id_menu')->unsigned();
		$table->foreign('id_menu')->references('id_menu')->on('menu');
		$table->string('name');
		$table->string('description');
		$table->double('price');
		$table->string('image');
		$table->boolean('display');
		$table->boolean('homepage');
		$table->timestamps();
	});
	Schema::create('event', function ($table) {
		$table->Increments('id_event');
		$table->string('title');
		$table->text('content');
		$table->string('image');
		$table->date('start_date');
		$table->date('expiry_date');
		$table->timestamps();
	});
	Schema::create('gcode_detail', function ($table) {
		$table->Increments('id_gcode_detail');
		$table->integer('id_gcode')->unsigned();
		$table->foreign('id_gcode')->references('id_gcode')->on('giftcode');
		$table->integer('id_customer')->unsigned();
		$table->foreign('id_customer')->references('id_customer')->on('customer');
		$table->timestamps();
	});
	Schema::create('payment_detail', function ($table) {
		$table->Increments('id_payment_detail');
		$table->integer('id_payment')->unsigned();
		$table->foreign('id_payment')->references('id_payment')->on('payment_method');
		$table->integer('id_customer')->unsigned();
		$table->foreign('id_customer')->references('id_customer')->on('customer');
		$table->string('balance');
		$table->timestamps();
    });

    // parents + childs case 2 => ORDER, ORDER DETAIL
	Schema::create('order', function ($table) {
		$table->Increments('id_order');
		$table->integer('id_customer')->unsigned();
		$table->foreign('id_customer')->references('id_customer')->on('customer');
		$table->integer('status');
		$table->date('order_date');
		$table->string('giftcode');
		$table->string('payment_method');
		$table->timestamps();
    });
	Schema::create('order_detail', function ($table) {
		$table->Increments('id_order_detail');
		$table->integer('id_order')->unsigned();
		$table->foreign('id_order')->references('id_order')->on('order');
		$table->integer('id_product')->unsigned();
		$table->foreign('id_product')->references('id_product')->on('product');
		$table->integer('quantity');
		$table->double('amount');
		$table->timestamps();
    });
    // parents + childs case 2 => ORDER, ORDER DETAIL <= end

	Schema::create('bill', function ($table) {
		$table->Increments('id_bill');
		$table->integer('id_account')->unsigned();
		$table->foreign('id_account')->references('id_account')->on('account');
		$table->integer('id_order_detail')->unsigned();
		$table->foreign('id_order_detail')->references('id_order_detail')->on('order_detail');
		$table->integer('id_customer')->unsigned();
		$table->foreign('id_customer')->references('id_customer')->on('customer');
		$table->string('content');
		$table->timestamps();
	});

    // Childs - sub => MANAGE, FEEDBACK, RESERVATION, SLIDE, SECTION, HEADER, FOOTER
	Schema::create('manage', function ($table) {
		$table->Increments('id_manage');
		$table->integer('id_blog')->unsigned();
		$table->foreign('id_blog')->references('id_blog')->on('blog');
		$table->integer('id_customer')->unsigned();
		$table->foreign('id_customer')->references('id_customer')->on('customer');
		$table->integer('id_comment')->unsigned();
		$table->foreign('id_comment')->references('id_comment')->on('comment');
		$table->timestamps();
	});
	Schema::create('feedback', function ($table) {
		$table->Increments('id_feedback');
		$table->integer('id_customer')->unsigned();
		$table->foreign('id_customer')->references('id_customer')->on('customer');
		$table->text('title');
		$table->text('content');
		$table->text('image');
		$table->timestamps();
	}); 
	Schema::create('reservation', function ($table) {
		$table->Increments('id_reservation');
		$table->integer('id_customer')->unsigned();
		$table->foreign('id_customer')->references('id_customer')->on('customer');
		$table->integer('id_table')->unsigned();
		$table->foreign('id_table')->references('id_table')->on('table');
		$table->string('event');
		$table->string('numberof_person');
		$table->string('checkin_date');
		$table->timestamps();
	});
	Schema::create('slide', function ($table) {
		$table->Increments('id_slide');
		$table->integer('id_widget')->unsigned();
        $table->foreign('id_widget')->references('id_widget')->on('admin_widget');
		$table->string('title');
		$table->string('content');
		$table->string('image');
		$table->timestamps();
    });
	Schema::create('section', function ($table) {
		$table->Increments('id_section');
		$table->integer('id_widget')->unsigned();
        $table->foreign('id_widget')->references('id_widget')->on('admin_widget');
		$table->string('title');
		$table->text('content');
		$table->string('image');
		$table->string('background');
		$table->integer('display');
		$table->integer('homepage');
		$table->timestamps();
	});
	Schema::create('header', function ($table) {
		$table->Increments('id_header');
		$table->integer('id_widget')->unsigned();
        $table->foreign('id_widget')->references('id_widget')->on('admin_widget');
		$table->string('title');
		$table->string('link');
		$table->integer('parent_id');
		$table->timestamps();
	});
	Schema::create('footer', function ($table) {
		$table->Increments('id_footer');
		$table->integer('id_widget')->unsigned();
        $table->foreign('id_widget')->references('id_widget')->on('admin_widget');
		$table->string('title');
		$table->text('content');
		$table->string('image');
		$table->boolean('copyright');
		$table->timestamps();
    });
}); 