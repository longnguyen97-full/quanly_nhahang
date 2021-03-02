<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Session;
use App\Models\Admin_Sidebar;
use App\Models\Admin_Widget;
use App\Models\Menu;
use App\Models\Product;
use App\Models\Blog_Category;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Order;

class AdminController extends Controller
{
    public function actionButton(Request $request) {

        if($request->id_sidebar) {
            $id = $request->id_sidebar;
            $result = Admin_Sidebar::find($id);
        }

        if($request->id_widget) {
            $id = $request->id_widget;
            $result = Admin_Widget::find($id);
        }

        if($request->id_menu) {
            $id = $request->id_menu;
            $result = Menu::find($id);
            $name = '_menu';
        }
        if($request->id_product) {
            $id = $request->id_product;
            $result = Product::find($id);
            $name = '_product';
        }
        if($request->id_blog_category) {
            $id = $request->id_blog_category;
            $result = Blog_Category::find($id);
            $name = '_blog_category';
        }
        if($request->id_blog) {
            $id = $request->id_blog;
            $result = Blog::find($id);
            $name = '_blog';
        }
        if($request->id_gallery) {
            $id = $request->id_gallery;
            $result = Gallery::find($id);
            $name = '_gallery';
        }
        if($request->id_order) {
            $id = $request->id_order;
            $result = Order::find($id);
            $name = '_order';
        }

        // =====================================================
        if($request->btnDisplay) {

            if($result->display == 0) {
                $result->display = 1;
            } else {
                $result->display = 0;
            }

            $result->save();

            return back();

        }

        if($request->btnHomepage) {

            if($result->homepage == 0) {
                $result->homepage = 1;
            } else {
                $result->homepage = 0;
            }

            $result->save();

            return back();

        }

        if($request->btnChange) {

            $id->link = $request->txtLink;

            $result->save();

            return back();
        }

        if($request->btnDetail) {

            return view('admin/details/'.$name)->with($name, $result);

        }

        if($request->btnApprove) {

            $result->status = 2;

            $result->save();

            return back();

        }

        if($request->btnComplete) {

            $result->status = 3;

            $result->save();

            return back();

        }

        if($request->btnCancel) {

            if($request->id_order) {
                $result->status = 4;
            }

            $result->save();

            return back();

        }

    }
}
