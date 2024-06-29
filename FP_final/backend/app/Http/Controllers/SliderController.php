<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;



class SliderController extends Controller
{
    public function HomeSlider()
    {
        $homeslider = Slider::find(1);
        return view('admin.home_slide.home_slide_all', compact('homeslider'));
    }
}



 // /**
    //  * Menampilkan daftar slider.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     $sliders = Slider::all();
    //     return view('admin.slider.index', compact('sliders'));
    // }

    // /**
    //  * Menampilkan form untuk membuat slider baru.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return view('admin.slider.create');
    // }

    // /**
    //  * Menyimpan slider baru ke database.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'description' => 'nullable',
    //     ]);

    //     $imagePath = $request->file('image')->store('public/slider_images');
    //     $imageUrl = Storage::url($imagePath);

    //     Slider::create([
    //         'title' => $request->title,
    //         'image' => $imageUrl,
    //         'description' => $request->description,
    //     ]);

    //     return redirect()->route('admin.slider.index')->with('success', 'Slider created successfully.');
    // }

    // /**
    //  * Menampilkan form untuk mengedit slider.
    //  *
    //  * @param  \App\Models\Slider  $slider
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Slider $slider)
    // {
    //     return view('admin.slider.edit', compact('slider'));
    // }

    // /**
    //  * Memperbarui slider yang ada di database.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Slider  $slider
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Slider $slider)
    // {
    //     $request->validate([
    //         'title' => 'required',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'description' => 'nullable',
    //     ]);

    //     if ($request->hasFile('image')) {
    //         $imagePath = $request->file('image')->store('public/slider_images');
    //         $imageUrl = Storage::url($imagePath);
    //     } else {
    //         $imageUrl = $slider->image;
    //     }

    //     $slider->update([
    //         'title' => $request->title,
    //         'image' => $imageUrl,
    //         'description' => $request->description,
    //     ]);

    //     return redirect()->route('admin.slider.index')->with('success', 'Slider updated successfully.');
    // }

    // /**
    //  * Menghapus slider dari database.
    //  *
    //  * @param  \App\Models\Slider  $slider
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Slider $slider)
    // {
    //     $slider->delete();
    //     return redirect()->route('admin.slider.index')->with('success', 'Slider deleted successfully.');
    // }

