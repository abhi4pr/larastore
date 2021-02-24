<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;
use Illuminate\Support\Facades\View;
use Mail;
use App\Models\Order;
use App\Models\OrderItem;
use Redirect;
use PDF;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Register(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:customers',
        'password' => 'required',
        'number' => 'required',
        'address' => 'required',
        ]);

        $gen_otp=rand(11111,99999);

        $user = Customer::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'otp' => $gen_otp,
            'password' => $request->input('password'),
            'number' => $request->input('number'),
            'address' => $request->input('address'),
        ]);

        return redirect('/login')->with('success','Registered Successfully');
    }

    public function Login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $credentials = DB::table('customers')->where('email',$email)->where('password',$password)->where('verified','0')->get();

        $data = bin2hex($email);
        
        if (count($credentials) > 0) {
            return view('/verify_email')->with('data',$data);
        } 
        
        $credent = DB::table('customers')->where('email',$email)->where('password',$password)->where('verified','1')->get();

        Session::put('name', $credent[0]->name); 
        Session::put('email', $credent[0]->email);
        Session::put('password', $credent[0]->password);
        Session::put('number', $credent[0]->number);
        Session::put('address', $credent[0]->address);
        
        if (count($credent) > 0) {
            return redirect('/my-account')->with('success','Successfully logged in');
        } 
        else {
            return redirect('/login')->with('failed','Oppes! You have entered invalid credentials');
        }
    }

    public function VerifyEmail(Request $request)
    {
        $email = $request->input('encemail');
        $ddemail = hex2bin($email);
        $otp = $request->input('otp');

        $check = DB::table('customers')->where('email',$ddemail)->where('otp',$otp)->get();

        if(count($check) > 0){
          $data = DB::table('customers')->where('email',$ddemail)->update(['otp'=>null, 'verified'=>'1']);
          return redirect('/login')->with('success','Profile verified Successfully');
        }
        else {
          return redirect('/login')->with('failed','OTP is wrong');
        }

    }

    public function Logout() 
    {
      Session::forget('name');
      Session::forget('email');
      Session::forget('password');
      Session::forget('number');
      Session::forget('address');

      return redirect('/login');
    }

    public function ProfileEd() 
    {
      $data = DB::table('customers')->where('email',Session::get('email'))->first();

      // get customer/user orders
      $gtordit = DB::table('order_items')->where('email',Session::get('email'))->get();

      $prod_name =[];
      foreach($gtordit as $order_list){
        $prod_name[$order_list->product_id] = DB::table("products")->where('id',$order_list->product_id)->value('pname');
      }

      if (empty($prod_name)) {
         return view('/my-account')->with(['data' => $data, 'gtordit' => $gtordit, 'prod_name' => $prod_name]);
      }
      else {
         return view('/my-account')->with(['data' => $data, 'gtordit' => $gtordit, 'prod_name' => $prod_name, 'order_list' => $order_list]);
      }
    }

    public function DetailoOrder($id)
    {
       $ordrdtl = DB::table('order_items')->where('order_id',$id)->get();
       return view('/order_detail')->with('ordrdtl',$ordrdtl);
    }

    public function DownloadInvoice($id)
    {  
       // download pdf invoice
       $invo = DB::table('order_items')->where('order_id',$id)->get();
       view()->share('ordrdtl',$invo);
       $pdf = PDF::loadView('/invoice',$invo);
       return $pdf->download('urinvoice.pdf');
    }

    public function ProfileUp(Request $request) 
    {
      $name = $request->input('name');
      $email = $request->input('email');
      $password = $request->input('password');
      $number = $request->input('number');
      $address = $request->input('address');

        $data = DB::table('customers')->where('email',Session::get('email'))->update(['name'=>$name, 'password'=>$password, 'number'=>$number, 'address'=>$address]);
        return redirect('/my-account')->with('success','Successfully profile updated');
    }

    public function Forgetpass(Request $request)
    {
      $email = $request->input('email');
      $query = DB::table('customers')->where('email',$email)->get();

      if(count($query) > 0){
        $data1 = array("body"=>$query[0]->password);
        
        Mail::send('forgetpass_email_temp', $data1, function($message) use ($email){
            $message->to($email, 'Admin')
                    ->subject('My password');
            $message->from('admin@gmail.com','From Visitor');
        });
        return redirect('/login')->with('success','Password sent Successfully on email');
      } else {
        return redirect('/forgetpass')->with('failed','Entered email doesnt exist');
      }
    }

}
