<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Config;
use App\Models\Service;
use App\Models\Product;
use App\Models\Manufacturer;
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
        $data = [
            'configs' => $configs,
            'abouts' => $abouts,
            'services' => $services
        ];
        return view('ui.index')->with($data);
    }

    public function shop()
    {
        $urgents = Product::with(['models', 'manufacturer'])->where('urgent', 1)->get();
        $manufacturers = Manufacturer::get();
        $data= [
            'urgents' => $urgents,
            'manufacturers' => $manufacturers
        ];
        return view('ui.shop')->with($data);
    }

    public function inner()
    {
        return view('ui.inner');
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
