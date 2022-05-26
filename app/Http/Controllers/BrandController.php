<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private $brand;
    private $brands;
    private $image;
    private $imageName;
    private $directory;
    private $imageURL;


    public function index()
    {
        return view('admin.brand.add');
    }

    public function create(Request $request)
    {
        $this->image = $request->file('image');
        $this->imageName = $this->image->getClientOriginalName();
        $this->directory = 'brand-images/';
        $this->image->move($this->directory,$this->imageName);

        $this->imageURL = $this->directory.$this->imageName;

        $this->brand = new Brand();
        $this->brand->name = $request->name;
        $this->brand->description = $request->description;
        $this->brand->image = $this->imageURL;
        $this->brand->save();


        return redirect('/add-brand')->with('message', 'Create Brand Info Successfully.');
    }

    public function manage()
    {
        $this->brands = Brand::orderBy('id', 'desc')->get();
        return view('admin.brand.manage', ['brands' => $this->brands]);
    }

    public function edit($id)
    {
        $this->brand = Brand::find($id);
        return view('admin.brand.edit', ['brand' => $this->brand]);
    }

    public function update(Request $request, $id)
    {
        $this->brand = Brand::find($id);
        if ($request->file('image'))
        {
            if(file_exists($this->brand->image))
            {
                unlink($this->brand->image);
            }
            $this->image = $request->file('image');
            $this->imageName = $this->image->getClientOriginalName();
            $this->directory = 'brand-images/';
            $this->image->move($this->directory,$this->imageName);

            $this->imageURL = $this->directory.$this->imageName;
        }
        else
        {
            $this->imageURL = $this->brand->image;
        }
        $this->brand->name = $request->name;
        $this->brand->description = $request->description;
        $this->brand->image = $this->imageURL;
        $this->brand->save();


        return redirect('/manage-brand')->with('message', 'Update Brand Info Successfully.');
    }

    public function delete($id)
    {
        $this->brand = Brand::find($id);
        if(file_exists($this->brand->image))
        {
            unlink($this->brand->image);
        }
        $this->brand->delete();

        return redirect('/manage-brand')->with('message', 'Delete Brand Info Successfully.');
    }
}
