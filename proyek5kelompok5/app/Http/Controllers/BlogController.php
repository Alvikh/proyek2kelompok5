<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\SolarPanelCapacity;
use App\Models\Storage;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = DB::table('blogs')         
                ->join('solar_panel_capacities', 'solar_panel_capacities.id', '=', 'blogs.capacity_id')
                ->join('storages', 'storages.id', '=', 'blogs.storage_id')
                ->get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        $capacities = SolarPanelCapacity::all();
        $storage = Storage::all();
    
        return view('admin.blog.create', compact('capacities', 'storage'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->capacity_id = $request -> capacity_id;
        $blog->storage_id = $request -> storage_id;
    
        // Handle image upload
        if ($request->hasFile('image')) {
            // Generate a unique filename for the image
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            // Move the image to the public/blog_images directory
            $request->file('image')->move(public_path('blog_images'), $imageName);
            $blog->image = 'blog_images/' . $imageName;
        }
    
        $blog->save();
    
        return redirect()->route('admin.blog.index')->with('success', 'Blog created successfully!');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $capacities = SolarPanelCapacity::all();
        $storage = Storage::all();
        
        return view('admin.blog.edit', compact('blog', 'capacities', 'storage'));
    }    

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
    
        // Handle image update
        if ($request->hasFile('image')) {
            if ($blog->image) {
                $imagePath = public_path($blog->image);
        
                // Pastikan file ada sebelum dihapus
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
    
            // Generate a unique filename for the new image
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            // Move the new image to the public/blog_images directory
            $request->file('image')->move(public_path('blog_images'), $imageName);
            $blog->image = 'blog_images/' . $imageName;
        }
    
        $blog->save();
    
        return redirect()->route('admin.blog.index')->with('success', 'Blog updated successfully!');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->image) {
            $imagePath = public_path($blog->image);
    
            // Pastikan file ada sebelum dihapus
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    
        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success', 'Blog deleted successfully!');
    }
    public function userView()
    {
        $blogs = Blog::all();
        return view('user_view', compact('blogs'));
    }
    public function produk()
    {
        $blogs = Blog::all();
        return view('produk', compact('blogs'));
    }
}
