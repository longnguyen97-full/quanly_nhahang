<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Models\Header;
use App\Models\Slide;
use App\Models\Section;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Menu;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Feedback;
use App\Models\Blog_Category;
use App\Models\Blog;
use App\Models\Manage;
use App\Models\Footer;
use App\Models\About;
use App\Models\Admin_Sidebar;
use App\Models\Admin_Widget;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $display_widgets = Admin_Widget::select('title','display')->where('display','=',1)->get();

        foreach($display_widgets as $display_widget) {

            if($display_widget->title == 'Header') { $headers = Header::where('parent_id','=',0)->get(); }
            if($display_widget->title == 'Slide') { $slides = Slide::all(); }
            if($display_widget->title == 'Footer') { $footers = Footer::select('id_footer')->value('id_footer'); }
            if($display_widget->title == 'Section') { $sections = Section::all(); }

        }

        $header_childs = Header::where('parent_id','!=',0)->get();
        
        $total_section = Section::latest('display')->value('display');
        $homepage_products = Product::where('homepage',1)->get();
        $galleries = Gallery::all();

        $homepage_menus = Menu::with('product')->where('homepage',1)->orderBy('id_menu','desc')->get();

        $orders = Order::with(['customer','product'])->get();

        $feedbacks = Feedback::with('customer')->select('id_customer','content')->limit('5')->get();

        $blog_categories = Blog_Category::all();
        $blogs = Blog::all();

        $footer_blogs = Blog::with('account_author')->limit(2)->get();

        $manages = Manage::with(['blog', 'customer', 'comment'])->get();
        foreach($manages as $manage) {
            $blog = $manage->blog[0]->title;
            $customer = $manage->customer[0]->fullname;
            $comment = $manage->comment[0]->content;
        }

        $abouts = About::all();
        $menus = Menu::all();
        $products = Product::select('id_product','name','description','price','image','display','homepage')->orderBy('id_menu','desc')->get();

        if(isset($headers)) { View::share('headers',$headers); }

        if(isset($slides)) { View::share('slides',$slides); }

        if(isset($footers)) { View::share('footers',$footers); }

        if(isset($sections)) { View::share('sections',$sections); }

        View::share('header_childs',$header_childs);
        View::share('total_section',$total_section);
        View::share('homepage_products',$homepage_products);
        View::share('galleries',$galleries);
        View::share('homepage_menus',$homepage_menus);
        View::share('orders',$orders);
        // View::share('homepage_products',$homepage_products);
        View::share('feedbacks',$feedbacks);
        View::share('blog_categories',$blog_categories);
        View::share('blogs',$blogs);
        View::share('footer_blogs',$footer_blogs);
        View::share('abouts',$abouts);
        View::share('menus',$menus);
        View::share('products',$products);

        // fixing bugs
        $section_5_background = Section::select('background')->where('display',5)->value('background');
        View::share('section_5_background',$section_5_background);

        $footer_sec1 = Footer::select('title')->where('id_footer',1)->value('title');
        $footer_sec1_content = Footer::select('content')->where('id_footer',1)->value('content');
        $footer_sec2 = Footer::select('title')->where('id_footer',2)->value('title');
        $footer_sec3 = Footer::select('title')->where('id_footer',3)->value('title');
        $footer_sec4 = Footer::select('title')->where('id_footer',4)->value('title');
        $footer_sec5 = Footer::select('content')->where('copyright',1)->value('content');
        View::share(['ftsec1' => $footer_sec1, 'ftsec1_content' => $footer_sec1_content,'ftsec2' => $footer_sec2, 'ftsec3' => $footer_sec3, 'ftsec4' => $footer_sec4, 'ftsec5' => $footer_sec5]);
    
        // // admin
        $sidebars = Admin_Sidebar::all();
        $sidebar_childs = Admin_Sidebar::select('title','link','parent_id')->where('parent_id','!=',0)->get();
        $sidebar_parents = Admin_Sidebar::select('id_sidebar','title')->where('parent_id',0)->where('dropdown',1)->get();

        $widgets = Admin_Widget::all();

        View::share(['sidebars'=>$sidebars, 'sidebar_childs'=>$sidebar_childs, 'sidebar_parents'=>$sidebar_parents]);
        View::share('widgets',$widgets);

        $pendings = Order::where('status',1)->count();
        $shippings = Order::where('status',2)->count();
        $accomplishes = Order::where('status',3)->count();
        $cancels = Order::where('status',4)->count();
        View::share('pendings',$pendings);
        View::share('shippings',$shippings);
        View::share('accomplishes',$accomplishes);
        View::share('cancels',$cancels);
    }
}
