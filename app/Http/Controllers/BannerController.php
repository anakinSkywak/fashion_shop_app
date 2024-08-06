<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;


class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('banners.index', compact('banners')); 
    }

    public function create()
    {
        return view('banners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Banner::create([
            'title' => $request->title,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('banners.index');
    }

    public function edit(Banner $banner)
    {
        return view('banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image',
        ]);

        $imagePath = $banner->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $banner->update([
            'title' => $request->title,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('banners.index');
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('banners.index');
    }
}
