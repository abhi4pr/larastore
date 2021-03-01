<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Models\Article;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $credentials = DB::table('admins')->where('username',$username)->where('password',$password)->get();

        if (count($credentials) > 0) {
        	Session::put('username', $credentials[0]->username); 
        	Session::put('password', $credentials[0]->password); 
            return redirect('/admin/home');
        } 
        else {
            return redirect('/admin/login')->with('failed','Oppes! You have entered invalid credentials');
        }
    }

    public function ProfileAEd() 
    {
      $pdata = DB::table('admins')->where('username',Session::get('username'))->first();
      return view('/admin/profile')->with('pdata',$pdata);
    }

    public function ProfileAUp(Request $request) 
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $data = DB::table('admins')->where('username',Session::get('username'))->update(['username'=>$username, 'password'=>$password]);
        return redirect('/admin/home')->with('success','Successfully profile updated');
    }

    public function Logout() 
    {
      Session::forget('username');
      Session::forget('password');
      
      return redirect('/admin/login');
    }

    public function Customers() 
    {
      $data = DB::table('customers')->get();
      return view('/admin/allcustomers')->with('data',$data);
    }

    public function Contacts() 
    {
      $data = DB::table('contacts')->get();
      return view('/admin/allcontactemail')->with('data',$data);
    }

    public function Carticles(Request $request)
    {
      if($request->hasFile('apic')){
         $fileNameToStore = base64_encode(file_get_contents($request->file('apic')));
      } else {
          $fileNameToStore = 'noimage.jpg';
      }

       $user = Article::create([
          'aname' => $request->input('aname'),
          'adesc' => $request->input('adesc'),
          'apic' => $fileNameToStore,
        ]);

        return redirect('/admin/home')->with('success','Article created Successfully');
    }

    public function Allarticles() 
    {
      $adata = DB::table('articles')->get();
      return view('/admin/allarticles')->with('adata',$adata);
    }

    public function AddProduct(Request $request)
    {
      $request->validate([
        'pname' => 'required',
        'pdesc' => 'required',
        'pimage' => 'required',
        'pprice' => 'required',
        'cname' => 'required',
      ]);
      // multiple images
      $images = array();
      if($files=$request->file('pgallery')){
          foreach($files as $file){
              $name=$file->getClientOriginalName();
              $file->move('pgllimages',$name);
              $images[]=$name;
          }
      }
      $images = serialize($images);
      // single image
    $image_name = $request->file('pimage')->getClientOriginalName();
    $request->file('pimage')->move('pgllimages',$image_name);

      $prod = Product::create([
        'pname' => $request->input('pname'),
        'pdesc' => $request->input('pdesc'),
        'pimage' => $image_name,
        'pgallery' => $images,
        'pprice' => $request->input('pprice'),
        'cname' => $request->input('cname'),
      ]);

      return redirect('/admin/allproducts')->with('success','Product added Successfully');
    }

    public function Allproducts() 
    {
      $alpdata = DB::table('products')->get();
      return view('/admin/allproducts')->with('alpdata',$alpdata);
    }

    public function AddCategory(Request $request)
    {
      $request->validate([
        'cname' => 'required',
      ]);

      $prod = Category::create([
        'cname' => $request->input('cname'),
      ]);

      return redirect('/admin/allcategories')->with('success','Category added Successfully');
    }

    public function Allcategory()
    {
       $allc = DB::table('categories')->get();
       return view('/admin/allcategories')->with('allc',$allc);
    }

    public function SendCatProduct()
    {
       $slcat = DB::table('categories')->get();
       return view('/admin/createproduct')->with('slcat',$slcat);
    }

    public function Allorders()
    {
       $allord = DB::table('order_items')->join('customers', 'customers.email', '=', 'order_items.email')->get();
       
       $prod_name =[];
         foreach($allord as $order_list){
           $prod_name[$order_list->product_id] = DB::table("products")->where('id',$order_list->product_id)->value('pname');
         }
       return view('/admin/allorders')->with(['allord'=>$allord, 'prod_name'=>$prod_name]);
    }
}
