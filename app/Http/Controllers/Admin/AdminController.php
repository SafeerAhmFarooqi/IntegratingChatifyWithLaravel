<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Group;
use App\Models\Shop;
use App\Models\Shop_Category;
use App\Models\Location;
use App\Models\Voucher;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserAccountActivation;
use App\Mail\UserAccountDeActivation;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function dashboard()
    {
        return view('Admin.dashboard');
    }


     public function users_list()
    {
        $users= User::all();
        return view('Admin.users_list',compact('users'));
    }

     public function groups_list()
    {
        $groups= Group::all();
        return view('Admin.groups_list',compact('groups'));
    }

      public function shops_list()
    {
        $shops= Shop::all();
        return view('Admin.shops_list',compact('shops'));
    }

      public function vouchers_list()
    {
        $vouchers= Voucher::all();
        return view('Admin.vouchers_list',compact('vouchers'));
    }

      public function users_posts()
    {
        //$user_posts= Post::all();

        $user_posts=Post::leftjoin('users','users.id','=','posts.user_id')
                ->get([
                    'posts.*',
                    'users.firstname'
                ]);
        return view('Admin.users_posts_list',compact('user_posts'));
    }

    public function active_status(Request $request,$id)
    {
        $user=user::find($id);
        if(!$user->active_status)
        {
             User::where('id',$id)->update([

                'active_status'=>1,
            ]);
            Mail::to($user->email)->send(new UserAccountActivation());
            return back()->with('message', 'Account Activation Email Has Been Sent to '.$user->email );
        }
         
        return redirect('Admin/users_list');
    }

     public function de_active_status(Request $request,$id)
    {

        $user=user::find($id);
        if($user->active_status)
        {
            User::where('id',$id)->update([

                'active_status'=>0,
            ]);
            Mail::to($user->email)->send(new UserAccountDeActivation());
            return back()->with('message', 'Account Deactivation Email Has Been Sent to '.$user->email );
        }
        return redirect('Admin/users_list');
    }

      public function user_delete(Request $request,$id)
    {
         $user= User::where('id',$id)->delete();
        return redirect('Admin/users_list');
    }

     public function shop_status_active(Request $request,$id)
    {
         $user= Shop::where('id',$id)->update([

            'shop_status'=>1,
        ]);
        return redirect('Admin/shops_list');
    }

     public function shop_status_deactive(Request $request,$id)
    {
         $user= Shop::where('id',$id)->update([

            'shop_status'=>0,
        ]);
        return redirect('Admin/shops_list');
    }

      public function shop_delete(Request $request,$id)
    {
         $user= Shop::where('id',$id)->delete();
        return redirect('Admin/shops_list');
    }

       public function active_users()
    {
         $users= User::where('active_status',1)->get();
        return view('Admin.active_users',compact('users'));
    }

       public function block_users()
    {
         $users= User::where('active_status',0)->get();
        return view('Admin.block_users',compact('users'));
    }

    
    public function downloadPdf(Request $request)
    {
        return "safeer";
        storage::download($request->filePath,'MyDocument');
    }
   




}
