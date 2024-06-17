<?php
namespace App\Http\Controllers;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index(){
        $slides = Slide::all(); // Fetch all slides from the database
        return view('admin.slideshow.index', compact('slides')); // Pass slides to the view

    }
    public function create(){
        return view('admin.slideshow.create');
        
    }
    public function store(Request $request){
        $slide = new Slide;
        $slide->title = $request->title;
        
        $imageFile = $request->image; //get from input 
        $imageName = time().'.'.$imageFile->getClientOriginalExtension();
        $imageFile->move(public_path('upload/admin/image/slide/'), $imageName);
        $imagePath = 'upload/admin/image/slide/'.$imageName;

        $slide->image = $imagePath;
        $slide->save();
        return redirect()->route('slide.index');
    }
    public function show($id){
        $slide = Slide::findOrFail($id); // Fetch the slide by ID
        return view('admin.slideshow.show', compact('slide'));
        
    }
    public function edit($id){
        $slide = Slide::findOrFail($id); // Fetch the slide by ID
        return view('admin.slideshow.edit', compact('slide'));
        
    }
    public function update(Request $request, $id){
        $slide = Slide::findOrFail($id);
    $slide->title = $request->title;

    if ($request->hasFile('image')) {
        $imageFile = $request->image;
        $imageName = time().'.'.$imageFile->getClientOriginalExtension();
        $imageFile->move(public_path('upload/admin/image/slide/'), $imageName);
        $imagePath = 'upload/admin/image/slide/'.$imageName;
        $slide->image = $imagePath;
    }

    $slide->save();
    return redirect()->route('slide.index')->with('success', 'Slide updated successfully');
}

    public function destroy($id)
    {
        $slide = Slide::findOrFail($id);
        $slide->delete();
        return redirect()->route('slide.index')->with('success', 'Slide deleted successfully');
        
    }

        
    }