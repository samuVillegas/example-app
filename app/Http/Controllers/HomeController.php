<?php
namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }
    public function about(): View
    {
        $title = "About us - Online Store";
        $subtitle = "About us";
        $description = "This is an about page ...";
        $author = "Developed by: Danilo";
        return view('home.about')->with("title", $title)
            ->with("subtitle", $subtitle)
            ->with("description", $description)
            ->with("author", $author);
    }
    public function contact(): View
    {
        $email = "villegassamuel25@gmail.com";
        $address = "Calle fake ";
        $phone_number = "10028282";
        return view('home.contact')->with("email", $email)
            ->with("address", $address)
            ->with("phone_number", $phone_number);
    }
}