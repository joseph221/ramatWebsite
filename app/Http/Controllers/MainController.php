<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Event;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function home(){
        return view('index');
    }

    public function about(){
        return view('about.about');
    }

    public function contactUs(){
        return view('contactUs');
    }
    public function gallary(){
        return view('gallary');
    }
    public function news(){
        $news = News::all();
        return view('News')->with('news',$news);
    }
    public function waste_manage(){
        return view('programs.waste_management');
    }
    public function women_empowerment(){
        return view('programs.women_empowerment');
    }
    public function young_generation(){
        return view('programs.young_generation');
    }
    public function healthy_ev_school(){
        return view('programs.healthy_env_school');
    }

    public function events(){
        $event = Event::all();
        return view('get_evolved')->with('event',$event);
    }

    public function sendMail(Request $request){
        $data =[
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];
        Mail::To('jjamalspring60@gmail.com')->send(new ContactUs($data));
        return back();
    }
    
}
