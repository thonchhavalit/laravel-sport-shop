<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slide;


class ContactController extends Controller{
    public function index(){
        $slides = Slide::all();
        return view('frontend.contact', compact('slides'));
    }
}