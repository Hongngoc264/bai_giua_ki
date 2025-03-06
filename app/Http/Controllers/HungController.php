<?php

namespace App\Http\Controllers;

use App\Models\Hung; 
use Illuminate\Http\Request;

class HungController extends Controller
{
   
    public function index()
    {
        $hungs = Hung::all();  
        return view('hungs.index', compact('hungs'));
    }
    public function trangchu()
{
    $hungs = Hung::all(); 
    return view('hungs.trangchu', compact('hungs'));
}
    public function home()
{
    $hungs = Hung::all(); 
    return view('hungs.home', compact('hungs'));
}

    
    public function create()
    {
        return view('hungs.create');
    }
    
    public function store(Request $request)
{
    
    $request->validate([
        'name' => 'required',
        'descriptions' => 'required',
        'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',  
    ]);

    $data = $request->all();

   
    if ($request->hasFile('images')) {
      
        if ($request->file('images')->isValid()) {
            
            $imageExtension = $request->images->getClientOriginalExtension();
            $imageName = time() . '.' . $imageExtension;

            
            $request->images->move(public_path('uploads'), $imageName);

           
            $data['images'] = 'uploads/' . $imageName; 
        } else {
            return redirect()->back()->withErrors(['images' => 'Tệp ảnh không hợp lệ.']);
        }
    }
 
    Hung::create($data);

   
    return redirect()->route('home.index');
}



   
    public function edit($id)
    {
        $hung = Hung::findOrFail($id);
        return view('hungs.edit', compact('hung'));
    }

  public function update(Request $request, $id)
{
    
    $request->validate([
        'name' => 'required',
        'descriptions' => 'required',
        'hung' => 'required',
        'images' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Nếu có ảnh, kiểm tra điều kiện
    ]);
    
   
    $hung = Hung::findOrFail($id);

    
    $data = $request->all();

   
    if ($request->hasFile('images')) {
        
        if ($hung->images && file_exists(public_path($hung->images))) {
            unlink(public_path($hung->images)); 
        }
        
      
        $image = $request->file('images');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('uploads'), $imageName); 
        $data['images'] = 'uploads/' . $imageName;
    }

    
    $hung->update($data);

   
    return redirect()->route('home.index');
}


   
    public function destroy($id)
    {
        $hung = Hung::findOrFail($id);
        $hung->delete();
        return redirect()->route('home.index');
    }
}
