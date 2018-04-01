<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Config;
use App\Models\Service;
use App\Models\Product;
use App\Models\Manufacturer;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class MainController extends Controller
{
    public function index()
    {
        $configs = Config::first();
        $abouts = About::get();
        $services = Service::get();
        $body_counts = DB::select('SELECT COUNT(id) as c, body as b FROM products GROUP BY body');
        $data = [
            'configs' => $configs,
            'abouts' => $abouts,
            'services' => $services,
            'body_counts' => $body_counts
        ];
        return view('ui.index')->with($data);
    }

    public function shop()
    {
        $urgents = Product::with(['models', 'manufacturer'])->where('urgent', 1)->get();
        $manufacturers = Manufacturer::get();
        $count = Product::count();
        $data= [
            'urgents' => $urgents,
            'manufacturers' => $manufacturers,
            'count' => $count
        ];
        return view('ui.shop')->with($data);
    }

    public function inner($id)
    {
        $product = Product::find($id);
        if(!$product){
            return redirect()->back();
        }

        $related = Product::where('model_id', $product->model_id)
            ->where('id','<>', $id)
            ->orderBy('id', 'desc')
            ->limit(3)
            ->get()->toArray();


        if(count($related) <= 3){
            $related_with_manufacturer = Product::where('manufacture', $product->manufacturer->id)
                    ->where('id','<>', $id)
                    ->orderBy('id', 'desc')
                    ->limit(3 - count($related))
                    ->get()->toArray();

            $related = array_merge($related, $related_with_manufacturer);

            if(count($related) < 3){
                $random = Product::where('manufacture', '<>', $product->manufacturer->id)
                    ->orderBy('id','desc')
                    ->limit(3 - count($related))
                    ->get()->toArray();

                $related = array_merge($related, $random);
            };

            foreach ($related  as $index => $rel){
                $related[$index] = new Product($rel);
            }
        }else{
            $related = $related->get();
        }


        return view('ui.inner')->with(compact('product', 'related'));
    }

    public function sentMail()
    {
        $this->validate(request(), [
            'name' => 'required|max:199|min:1',
            'email' => 'required|email|max:199',
            'messsage' => 'required|min:3',
        ]);
        $email = 'atkaa92@gmail.com';
        $subject = 'Platinum contact mail';
        $name = request('name');

        $mail_data = [
            'name' => request('name'),
            'email' => request('email'),
            'subject' => $subject,
            'messsage' => request('messsage'),
        ];
        $mail = Mail::send('ui.includes.mail', $mail_data, function($message) use ($email,$subject, $name){
            $message->to($email)->subject($subject);
            $message->from(env('MAIL_USERNAME'), $name);
            $message->replyTo(env('MAIL_USERNAME'), $name);
        });
        return redirect()->back()->with('success', 'The mail has been sent successfully');;
    }
}
