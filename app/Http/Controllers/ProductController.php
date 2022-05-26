<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\SubImage;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $categories;
    private $subCategories;
    private $brands;
    private $units;
    private $product;
    private $products;
    private $images;
    private $imageName;
    private $image;
    private $directory;
    private $imageURL;
    private $subImages;
    private $categoryId;

    public function index()
    {
        $this->categories = Category::all();
        $this->subCategories = SubCategory::all();
        $this->brands = Brand::all();
        $this->units = Unit::all();
        return view('admin.product.add', [
            'categories' => $this->categories,
            'subCategories' => $this->subCategories,
            'brands' =>  $this->brands,
            'units' => $this->units
        ]);
    }

    public function getSubCategoryByCategory()
    {
        $this->categoryId = $_GET['id'];
        $this->subCategories = SubCategory::where('category_id', $this->categoryId)->get();
        return response()->json($this->subCategories);
    }

    public function create(Request $request)
    {

        $this->image = $request->file('image');
        $this->imageName = $this->image->getClientOriginalName();
        $this->directory = 'product-images/';
        $this->image->move($this->directory, $this->imageName);

        $this->imageURL = $this->directory.$this->imageName;


        $this->product = new Product();
        $this->product->category_id             = $request->category_id;
        $this->product->sub_category_id         = $request->sub_category_id;
        $this->product->brand_id                = $request->brand_id;
        $this->product->unit_id                 = $request->unit_id;
        $this->product->name                    = $request->name;
        $this->product->code                    = $request->code;
        $this->product->regular_price           = $request->regular_price;
        $this->product->selling_price           = $request->selling_price;
        $this->product->short_description       = $request->short_description;
        $this->product->long_description        = $request->long_description;
        $this->product->image                   = $this->imageURL;
        $this->product->save();

        $this->images = $request->file('sub_image');
        foreach ($this->images as $image)
        {
            $this->imageName = $image->getClientOriginalName();
            $this->directory = 'product-sub-images/';
            $image->move($this->directory, $this->imageName);
            $this->imageURL = $this->directory.$this->imageName;

            $this->subImages                = new SubImage();
            $this->subImages->product_id    = $this->product->id;
            $this->subImages->image         = $this->imageURL ;
            $this->subImages->save();

        }

        return redirect('/add-product')->with('message', 'Product info Create Successfully.');
    }

    public function manage()
    {
        $this->products = Product::orderBy('id', 'desc')->get();
        return view('admin.product.manage', ['products' => $this->products]);
    }

    public function edit($id)
    {
        $this->product              = Product::find($id);
        $this->categories           = Category::all();
        $this->subCategories        = SubCategory::all();
        $this->brands               = Brand::all();
        $this->units                = Unit::all();
        $this->subImages            = SubImage::where('product_id', $id)->get();

        return view('admin.product.edit', [
            'product'                => $this->product,
            'categories'             => $this->categories ,
            'sub_categories'         => $this->subCategories ,
            'brands'                 => $this->brands  ,
            'units'                  => $this->units ,
            'sub_images'             => $this->subImages
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->product = Product::find($id);
        if ($request->file('image'))
        {
            if(file_exists($this->product->image))
            {
                unlink($this->product->image);
            }
            $this->image = $request->file('image');
            $this->imageName = $this->image->getClientOriginalName();
            $this->directory = 'product-images/';
            $this->image->move($this->directory, $this->imageName);

            $this->imageURL = $this->directory.$this->imageName;
        }
        else
        {
            $this->imageURL = $this->product->image;
        }

        $this->product->category_id             = $request->category_id;
        $this->product->sub_category_id         = $request->sub_category_id;
        $this->product->brand_id                = $request->brand_id;
        $this->product->unit_id                 = $request->unit_id;
        $this->product->name                    = $request->name;
        $this->product->code                    = $request->code;
        $this->product->regular_price           = $request->regular_price;
        $this->product->selling_price           = $request->selling_price;
        $this->product->short_description       = $request->short_description;
        $this->product->long_description        = $request->long_description;
        $this->product->image                   = $this->imageURL;
        $this->product->save();


       if ($this->images = $request->file('sub_image'))
       {
           $this->subImages = SubImage::where('product_id', $id)->get();
           foreach ($this->subImages as $subImage)
           {
               if(file_exists($subImage->image))
               {
                   unlink($subImage->image);
              }
               $subImage->delete();
           }

           foreach ($this->images as $image)
           {
               $this->imageName = $image->getClientOriginalName();
               $this->directory = 'product-sub-images/';
               $image->move($this->directory, $this->imageName);
               $this->imageURL = $this->directory.$this->imageName;

               $this->subImages                = new SubImage();
               $this->subImages->product_id    = $this->product->id;
               $this->subImages->image         = $this->imageURL ;
               $this->subImages->save();

           }
       }
        return redirect('/manage-product')->with('message', 'Product info Update Successfully.');
    }
    public function delete($id)
    {
        $this->product = Product::find($id);
        if(file_exists($this->product->iamge))
        {
            unlink($this->product->iamge);
        }
        $this->product->delete();

        $this->subImages = SubImage::where('product_id', $id)->get();
        foreach ($this->subImages as $subImage)
        {
            if(file_exists($subImage->iamge))
            {
                unlink($subImage->iamge);
            }
            $subImage->delete();
        }
        return redirect('/manage-product')->with('message', 'Product info Delete Successfully.');
    }

}
