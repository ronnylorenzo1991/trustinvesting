<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::latest('id')->paginate(9);;
        return view('admin.gallery.index', compact('images'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('images/gallery/', $imageName);
            $image = new Image;
            $image->url = 'images/gallery/' . $imageName;
            $image->save();
            return redirect(route('admin.image.index'))->with('info', 'the image was added');
        }
        else
        return redirect(route('admin.image.index'))->with('error', 'the image was not added');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param Image $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        if ($image->delete())
        Storage::delete($image->url);

        return redirect(route('admin.image.index'))->with('info', 'the image was deleted');
    }
}
