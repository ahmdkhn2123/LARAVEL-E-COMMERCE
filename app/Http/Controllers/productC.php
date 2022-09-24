<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use App\Models\order;
use Session;
use Illuminate\Support\Facades\DB;
class productC extends Controller
{
    public function index()
    {
        $data=product::all();
        return view('product',['product'=>$data]);
    }

    public function detail($id)
    {
        $data=product::find($id);
        return view('detail',['product'=>$data]);
    }

    public function addtocart(Request $request)
    {
        if($request->session()->has('user'))
        {
            $Cart=new cart();
            $Cart->user_id=$request->session()->get('user')->id;
            $Cart->product_id=$request->get('product_id');
            $Cart->save();
            return redirect('/');
        }else{
            return redirect('login');
        }
    }

    static function cartItem()
    {
        $userId=Session::get('user')->id;
        return cart::where('user_id',$userId)->count();
    }

    public function logout()
    {
        if(Session::has('user')){
          Session::forget('user');
          return redirect('login');
        }
    }

    public function cartlist()
    {
        $user=Session::get('user')->id;
        $products=DB::table('carts')->join('products','carts.product_id','=','products.id')
            ->where('carts.user_id',$user)->select('products.*','carts.id as cart_id')->get();
        return view('cartlist',['products'=>$products]);
        // 'carts.id as cart_id'->'For delete';
    }

    public function delete($id)
    {
        $data=cart::find($id);
        $data->delete();
        return redirect('cartlist');
    }

    public function ordernow()
    {
        $user=Session::get('user')->id;
        $total=DB::table('carts')->join('products','carts.product_id','=','products.id')
            ->where('carts.user_id',$user)->sum('products.price');
        return view('ordernow',['total'=>$total]);
    }

    public function orderplace(Request $request)
    {
        $user=Session::get('user')->id;
        $alluser=cart::where('user_id',$user)->get();
        foreach($alluser as $cart)
        {
            $Order=new order();
            $Order->product_id=$cart->product_id;
            $Order->user_id=$cart->user_id;
            $Order->status='pending';
            $Order->payment_method=$request->get('payment');
            $Order->payment_status='pending';
            $Order->address=$request->get('address');
            $Order->save();
            cart::where('user_id',$user)->delete();


        }
    }

    public function myOrders()
    {
        $user=Session::get('user')->id;
        $orders=DB::table('orders')->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$user)->get();
        return view('myOrders',['order'=>$orders]);
    }

}
