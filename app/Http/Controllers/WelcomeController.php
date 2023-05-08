<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\CategoryProduct;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Secvice;
use App\Models\Strengths;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function show(){
        $list_banner = Banner::all();
        $contact = Contact::find(5);
        $partners = Partner::all();
        $categorys = CategoryProduct::all();
        $services = Secvice::all();
        $about    = About::find(1);
        $contact =Contact::find(5);
        $strengths = Strengths::find(1);
        return view('welcome',compact('list_banner','contact','partners','categorys','services','about','contact','strengths'));
    }
}
