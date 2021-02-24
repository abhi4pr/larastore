<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use DB;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Redirect;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\RatingReview;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function HomeProBlog()
    {
       $homepro = DB::table('products')->get();
       $homeblo = DB::table('articles')->get();
       return view('/index')->with(['homepro' => $homepro, 'homeblo' => $homeblo]);
    }

    public function CateMenu()
    {
       $catdata = DB::table('categories')->get();
       return $catdata;
    }

    public function ProToCat($data)
    {
       $catpro = DB::table('products')->where('cname',$data)->get();
       return view('/category')->with('catpro',$catpro);
    }

    public function LoadAllBlogs()
    {
        $wdata = DB::table('articles')->get();
        return view('/blogs')->with('wdata',$wdata);
    }

    public function LoadSingleBlog($id)
    {
      $sartde = Article::find($id);
      return view('/single-blog')->with('sartde',$sartde);
    }

    public function LoadAllProducts()
    {
        $wpdata = DB::table('products')->get();
        return view('/shop')->with('wpdata',$wpdata);
    }

    public function LoadSingleProduct($id)
    {
        $wpsdata = Product::find($id);
        // get product reviews
        $ratingd = DB::table('rating_reviews')->where('prod_id',$id)->get();
        
        return view('/single-product')->with(['wpsdata' => $wpsdata, 'ratingd' => $ratingd]);
    }

    public function Addtocart(Request $request)
    {
      if(!Session::has('email')){
        return redirect::back()->with('failed','Sorry, you are not logged in');
      }

      $pid = $request->input('pid');
      $checki = DB::table('carts')->where('email',Session::get('email'))->where('pid',$pid)->get();
      
      if (count($checki) > 0) {
        return redirect::back()->with('failed','This product allready exist in cart');
      }       
      else{
        $cardata = Cart::create([
          'pid' => $request->input('pid'),
          'pname' => $request->input('pname'),
          'pimage' => $request->input('pimage'),
          'qty' => $request->input('qty'),
          'pprice' => $request->input('pprice'),
          'total_price' => $request->input('total_price'),
          'email' => Session::get('email'),
        ]);

      return redirect('/cart')->with('success','Product added to cart Successfully');
      }
    }

    public function GetCartItems()
    {
        $getcdata = DB::table('carts')->where('email',Session::get('email'))->get();
        return view('/cart')->with('getcdata',$getcdata);
    }

    public function UpdateCartItems(Request $request)
    {
        $id = $request->input('cid');
        $pqty = $request->input('itemQty');
        $price = $request->input('pprice')*$pqty;
        
        $data = DB::table('carts')->where('id',$id)->update(['qty'=>$pqty, 'total_price'=>$price]);
        return redirect('/cart');
    }

    public function RemoveScart($id)
    {
       $trash = DB::table('carts')->where('id', $id)->delete();
       return redirect('/cart');
    }

    public function Countcart()
    {
       $ccc = DB::table('carts')->where('email',Session::get('email'))->get();
       $ahadu = count($ccc);
       return $ahadu;
    }

    public function Search(Request $request)
    {
       $sinput = $request->input('pname');
       $postvar = DB::table('products')->where('pname','LIKE','%'.$sinput.'%')->get();
       return view('/searchresult')->with('postvar',$postvar); 
    }    

    public function Checkout()
    {
       $finald = DB::table('carts')->where('email',Session::get('email'))->get();
       return view('/checkout')->with('finald',$finald); 
    }    

    public function ConfirmOrder(Request $request)
    {
       $orderdata = Order::create([
          'username' => Session::get('name'),
          'email' => Session::get('email'),
          'number' => Session::get('number'),
          'address' => Session::get('address'),
          'pmode' => 'COD',
          'grand_total' => $request->input('grand_total'),
       ]);

      $lastID = $orderdata->id;

      $lpvar = DB::table('carts')->where('email',Session::get('email'))->get();
        foreach ($lpvar as $sku){ 
          $itemsave = OrderItem::create([
            'order_id' => $lastID,
            'product_id' => $sku->pid,
            'qty' => $sku->qty,
            'price' => $sku->pprice,
            'pmode' => 'COD',
            'email' => Session::get('email'),
            'grand_total' => $request->input('grand_total'),
         ]);
        }

      $saafcrt = DB::table('carts')->where('email', Session::get('email'))->delete();

      return redirect('/my-account')->with('success','Your ordered Received Successfully'); 
    }

    public function SaveReview(Request $request)
    {
       $reviewdata = RatingReview::create([
          'prod_id' => $request->input('pid'),
          'email' => Session::get('email'),
          'rating' => $request->input('rating'),
          'review' => $request->input('review'),
       ]);

       return redirect::back()->with('success','Your Review Submitted'); 
    }

}
