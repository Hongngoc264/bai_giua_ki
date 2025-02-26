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



   
    public function create()
    {
        return view('hungs.create');
    }
    // Lưu dữ liệu vào database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        Hung::create($request->all());
        return redirect()->route('home.index');
    }

    // Tìm mục cần sửa và trả về form sửa
    public function edit($id)
    {
        $hung = Hung::findOrFail($id);
        return view('hungs.edit', compact('hung'));
    }

    // Cập nhật dữ liệu
    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
    ]);
    
    $hung = Hung::findOrFail($id);
    $hung->update($request->all());
    
    return redirect()->route('home.index');
}


    // Xóa dữ liệu
    public function destroy($id)
    {
        $hung = Hung::findOrFail($id);
        $hung->delete();
        return redirect()->route('home.index');
    }
}
