<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Buku;
 
class VellController extends Controller
{
    public function home(){
        $buku = Buku::all();
        return view('home', ['buku' => $buku]);
    }
 
    public function create()
    {
        return view('create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'Judul'=>'required',
            'Penerbit'=> 'required',
            'Tahun_Terbit' => 'required|integer',
            'Pengarang' => 'required'
          ]);
          $buku = new Buku([
            'Judul' => $request->get('Judul'),
            'Penerbit'=> $request->get('Penerbit'),
            'Tahun_Terbit'=> $request->get('Tahun_Terbit'),
            'Pengarang'=> $request->get('Pengarang')
          ]);
          $buku->save();
          return redirect('/')->with('success', 'Book has been added');
    }
 
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
        $buku = Buku::find($id);
 
        return view('edit', compact('buku'));
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
        $request->validate([
            'Judul'=>'required',
            'Penerbit'=> 'required',
            'Tahun_Terbit' => 'required|integer',
            'Pengarang' => 'required'
          ]);
   
          $buku = Buku::find($id);
          $buku->Judul = $request->get('Judul');
          $buku->Penerbit = $request->get('Penerbit');
          $buku->Tahun_Terbit = $request->get('Tahun_Terbit');
          $buku->Pengarang = $request->get('Pengarang');
          $buku->save();
   
          return redirect('/')->with('success', 'Books has been updated');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
   
        return redirect('/')->with('success', 'Books has been deleted Successfully');
    }
 
}