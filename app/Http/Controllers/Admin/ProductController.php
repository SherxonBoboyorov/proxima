<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCharacter;
use App\Models\ProductGallary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        Validator::make($input, [
            'image' => 'required|mimes:jpg,jpeg,png,webp',
            'title_ru' => 'required|max:255',
            'title_uz' => 'required|max:255',
            'price_ru' => 'required|max:255',
            'price_uz' => 'required|max:255',
            'sub_content_ru' => 'required',
            'sub_content_uz' => 'required',
            'description_ru' => 'required',
            'description_uz' => 'required',
            'specifications_ru' => 'required',
            'specifications_uz' => 'required',
        ])->validate();


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if (!File::exists(public_path() . '/upload/product/' . date('d-m-Y')))
            {
                File::makeDirectory(public_path() . '/upload/product/' . date('d-m-Y'), $mode = 0777, true, true);
            }
            $file->move(public_path() . '/upload/product/' . date('d-m-Y'), $file->getClientOriginalName());
            $image = '/upload/product/' . date('d-m-Y') . '/' . $file->getClientOriginalName();
        }

        $slug = Str::slug($input['title_ru'], '-', 'ru');
        $slug = Str::slug($input['title_uz'], '-', 'uz');

        if (Product::where('slug_ru', 'slug_uz', $slug)->first()) {
            $slug = $slug . '-' . time();
        }

        $product = Product::create([
            'image' => $image,
            'title_ru' => $input['title_ru'],
            'title_uz' => $input['title_uz'],
            'price_ru' => $input['price_ru'] ?? null,
            'price_uz' => $input['price_uz'] ?? null,
            'sub_content_ru' => $input['sub_content_ru'] ?? null,
            'sub_content_uz' => $input['sub_content_uz'] ?? null,
            'description_ru' => $input['description_ru'] ?? null,
            'description_uz' => $input['description_uz'] ?? null,
            'specifications_ru' => $input['specifications_ru'] ?? null,
            'specifications_uz' => $input['specifications_uz'] ?? null,
            'slug_ru' => $slug,
            'slug_uz' => $slug,
            'meta_title_ru' => $input['meta_title_ru'],
            'meta_title_uz' => $input['meta_title_uz'],
            'meta_description_ru' => $input['meta_description_ru'],
            'meta_description_uz' => $input['meta_description_uz'],
        ]);



        if (isset($input['attributes']) && $input['attributes'] !== null && json_decode($input['attributes'], true)) {
            foreach(json_decode($input['attributes'], true) as $attr) {
                ProductCharacter::create([
                    'product_id' => $product->id,
                    'key' => $attr['attr'],
                    'value' => $attr['val_attr']
                ]);
            }
        }

        if (isset($input['galleries']) && $input['galleries'] !== null && json_decode($input['galleries'], true)) {
            foreach(json_decode($input['galleries'], true) as $gallery) {
                ProductGallary::create([
                    'product_id' => $product->id,
                    'image' => $gallery['image']
                ]);
            }
        }

        return redirect()->route('product.index')->with('message', "Продукт успешно создано");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product  = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        Validator::make($input, [
            'title_ru' => 'required|max:255',
            'title_uz' => 'required|max:255',
            'price_ru' => 'required|max:255',
            'price_uz' => 'required|max:255',
            'sub_content_ru' => 'required',
            'sub_content_uz' => 'required',
            'description_ru' => 'required',
            'description_uz' => 'required',
            'specifications_ru' => 'required',
            'specifications_uz' => 'required',
        ])->validate();

        $product = Product::find($id);


        if ($request->hasFile('image')) {
            $file = $request->file('image');

            if (File::exists(public_path() . $product->image)) {
                File::delete(public_path() . $product->image);
            }

            if (!File::exists(public_path() . '/upload/product/' . date('d-m-Y')))
            {
                File::makeDirectory(public_path() . '/upload/product/' . date('d-m-Y'), $mode = 0777, true, true);
            }
            $file->move(public_path() . '/upload/product/' . date('d-m-Y'), $file->getClientOriginalName());
            $image = '/upload/product/' . date('d-m-Y') . '/' . $file->getClientOriginalName();
        } else {
            $image = $product->image;
        }

        $slug = Str::slug($input['title_ru'], '-', 'ru');
        $slug = Str::slug($input['title_uz'], '-', 'uz');

        if ($slug !== $product->slug) {
            if (Product::where('slug_ru', 'slug_uz', $slug)->first()) {
                $slug = $slug . '-' . time();
            }
        }

           $product->image = $image;
           $product->title_ru = $input['title_ru'];
           $product->title_uz = $input['title_uz'] ?? null;
           $product->price_ru = $input['price_ru'] ?? null;
           $product->price_uz = $input['price_uz'] ?? null;
           $product->sub_content_ru = $input['sub_content_ru'] ?? null;
           $product->sub_content_uz = $input['sub_content_uz'] ?? null;
           $product->description_ru = $input['description_ru'] ?? null;
           $product->description_uz = $input['description_uz'] ?? null;
           $product->specifications_ru = $input['specifications_ru'] ?? null;
           $product->specifications_uz = $input['specifications_uz'] ?? null;
           $product->slug_ru = $slug;
           $product->slug_uz = $slug;
           $product->meta_title_ru = $input['meta_title_ru'];
           $product->meta_title_uz = $input['meta_title_uz'];
           $product->meta_description_ru = $input['meta_description_ru'];
           $product->meta_description_uz = $input['meta_description_uz'];
           $product->save();


           foreach($product->characters as $character) {
            $character->delete();
        }

        if (isset($input['attributes']) && $input['attributes'] !== null && json_decode($input['attributes'], true)) {
            foreach(json_decode($input['attributes'], true) as $attr) {
                ProductCharacter::create([
                    'product_id' => $product->id,
                    'key' => $attr['key'],
                    'value' => $attr['value']
                ]);
            }
        }

        foreach ($product->gallaries as $gallery) {
            $gallery->delete();
        }

        if (isset($input['galleries']) && $input['galleries'] !== null && json_decode($input['galleries'], true)) {
            foreach(json_decode($input['galleries'], true) as $gallery) {
                ProductGallary::create([
                    'product_id' => $product->id,
                    'image' => $gallery['image']
                ]);
            }
        }

        return redirect()->route('product.index')->with('message', "Продукт успешно обновлено");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if (File::exists(public_path() . $product->image)) {
            File::delete(public_path() . $product->image);
        }

        if ($product->delete()) {
            return redirect()->route('product.index')->with('message', "Продукт успешно удалено");
        }
    }
}
