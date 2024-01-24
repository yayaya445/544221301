<?php 
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
use App\Models\reservasi; 
 
class reservasicontroller extends Controller 
{ 
    /**  
     * Display a listing of the resource. 
     *  
     * @return \Illuminate\Http\Response 
    */ 
    public function index() 
    { 
        $pejualan = penjualan::all(); 
        return view ('index')->with('penjualan',$penjualan); 
    } 
    /** 
     * Show the form for creating a new resource. 
     *  
     * @return \Illuminate\Http\Response 
     */ 
    public function create() 
    { 
        return view('create'); 
    } 
    /** 
     * Store a newly created resource in storage. 
     *  
     * @param \Illuminate\Http\Request $request 
     * @return \Illuminate\Http\Response 
     */ 
    public function store(Request $request) 
    { 
        $input = $request->all(); 
        reservasi::create($input); 
        return redirect('penjualan')->with('flash_message','Penjualan Berhasil Ditambahkan'); 
    } 
 
    /** 
     * Display the specified resource. 
     *  
     * @param int $id 
     * @return \Illuminate\Http\Response 
     */ 
    public function show($id) 
    { 
        $penjualan = penjualan::find($id); 
        return view('show')->with('penjualan',$penjualan); 
    } 
     
    /** 
     * Show the form for editing the specified resource. 
     *  
     * @param int $id 
     * @return \Illuminate\Http\Response 
     */ 
    public function edit($id) 
    { 
        $penjualan = penjualan::find($id); 
        return view('edit')->with('penjualan',$penjualan); 
    } 
    /** 
     * Update the specified resource in storage. 
     *  
     * @param \Illuminate\Http\Request $request 
     * @param int $id 
     * @return \Illuminate\Http\Response 
     */ 
    public function update(Request $request,$id) 
    { 
        $penjualan = penjualan::find($id); 
        $input = $request->all(); 
        $penjualan->update($input); 
        return redirect('penjualan')->with('flash_message','penjualan Berhasil DI Update'); 
    } 
    /** 
     * Remove the specified resource from storage. 
     *  
     * @param int $id 
     * @return \Illuminate\Http\Response 
     */ 
    public function destroy($id) 
    { 
        reservasi::destroy($id); 
        return redirect('penjualan')->with('flash_message','penjualan Berhasil Dihapus'); 
    } 
}   