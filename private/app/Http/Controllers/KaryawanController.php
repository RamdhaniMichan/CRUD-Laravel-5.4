<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\KaryawanModel;
use Validator;
use Storage;
use App\Http\Requests\Karyawan_Request;
 
class KaryawanController extends Controller
{
  public function index()
      {
          $karyawan_list = KaryawanModel::orderBy('id','desc')->where('deleted','0')->paginate(3);
          $jumlah_karyawan = $karyawan_list->count();
          return view('chap8.karyawan',compact('halaman','karyawan_list','jumlah_karyawan'));
      }
 
 
      public function create()
      {
          return view('chap8.create',compact('halaman'));
      }
 
      private function uploadFoto(Karyawan_Request $request){
        $foto = $request->file('foto');
        $ext = $foto->getClientOriginalExtension();
 
        if($request->file('foto')->isValid()){
            $namaFoto = date('YmdHis').".".$ext;
            $upload_path = 'fotoUpload';
            $request->file('foto')->move($upload_path,$namaFoto);
            return $namaFoto;
        }
        return false;
      }
      public function store(Karyawan_Request $request)
      {
          $input = $request->all();
          //upload foto
          if ($request->hasFile('foto')) {
            $input['foto'] = $this->uploadFoto($request);
          }
          //insert data
          $input['deleted'] = 0;
          KaryawanModel::create($input);
          return redirect('karyawan');
      }
 
 
      public function show($id)
      {
          $karyawan = KaryawanModel::findOrFail($id);
          return view('chap8.show',compact('halaman','karyawan'));
      }
 
 
      public function edit($id)
      {
          $karyawan = KaryawanModel::findOrFail($id);
          return view('chap8.edit',compact('karyawan'));
      }
 
 
      public function cari(Request $request)
      {
        $cari = $request['cari'];
        $hasil_nama = KaryawanModel::where('nama', 'like','%'.$cari.'%')->orWhere('nip', 'like','%'.$cari.'%')->paginate(3);
        $t_nama = $hasil_nama->count();
        $jumlah_karyawan = $t_nama;
        $karyawan_list = $hasil_nama;
        return view('chap8.karyawan',compact('halaman','karyawan_list','jumlah_karyawan'));
      }
 
 
 
      public function HapusFoto(KaryawanModel $karyawan)
      {
       $exist=Storage::disk('foto')->exists($karyawan->foto);
       if(isset($karyawan->foto)&&$exist){
         $deleted = Storage::disk('foto')->delete($karyawan->foto);
         if($deleted){
             return true;
         }
         return false;
       }
      }
 
 
 
      public function DeleteFoto($request)
      {
        $file = 'fotoUpload/'.$request->foto;
        if (is_file($file)) {
          unlink($file);
        }
      }
 
     
      public function update(KaryawanModel $karyawan,Request $request)
      {
        $input=$request->all();
        $validation = Validator::make($input,[
          'nip'=>'required|string|size:5',
          'nama'=>'required|string|max:35|min:5',
          'tgl_lahir'=>'required|date',
          'gender'=>'required|in:L,P',
          'foto'=>'sometimes|image|max:500|mimes:jpg,jpeg,bmp,png,JPG,JPEG,PNG',
        ]);
        if($validation->passes())
        {
          //cek ada foto apa ga?
          if($request->hasFile('foto')){
            $this->DeleteFoto($karyawan);
            $ext = $request['foto']->getClientOriginalExtension();
            $namaFoto = date('YmdHis').".".$ext;
            $upload_path = 'fotoUpload';
            $request->file('foto')->move($upload_path,$namaFoto);
            $input['foto'] = $namaFoto;
          }
 
          $update = KaryawanModel::find($input['id']);
          $update->update($input);
          return redirect('karyawan');
        }
        return back()->withInput()->withErrors($validation);
      }
 
 
      public function destroy(KaryawanModel $karyawan)
      {
        $this->DeleteFoto($karyawan);
        $user = KaryawanModel::find($karyawan->id);
        $user->delete();
        return redirect('karyawan');
      }}