<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use File;
use App\about, App\struktur, App\Setting, App\Profil, App\bidang, App\rolestruktur, App\program, App\kajian, App\berita;

class AdminController extends Controller
{
    // --------------------- Index ------------------------

    function index(){
        $setting = Setting::first();
        return view('Admin/content/dashboard', ['setting' => $setting]);
    }


    // --------------------- Setting ----------------------
    function setting(){
        $setting = Setting::first();
        return view('Admin/content/setting', ['setting' => $setting]);
    }
    function settingedit(){
        $setting = Setting::first();
        return view('Admin/content/settingedit', ['setting' => $setting]);
    }
    function settingupdate(Request $data){

        $this->validate($data,[
            'titleWeb' => 'required'
         ]);

        $setting = Setting::where('idSetting', 1)
            ->update(['titleWeb' => $data->titleWeb]);
        return redirect('admin/setting');
    }


    // --------------------- Visi Misi ----------------------
    function visimisi(){
        $setting = Setting::first();
        $about = About::first();
        return view('Admin/content/visimisi', ['about' => $about, 'setting' => $setting]);
    }
    function visimisiedit($id){
        $setting = Setting::first();
        $about = About::first();
        if ($id == 'Visi') {
            return view('Admin/content/visimisiedit', ['about' => $about, 'data' => 'visi', 'setting' => $setting]);
        }elseif ($id == 'Misi') {
            return view('Admin/content/visimisiedit', ['about' => $about, 'data' => 'misi', 'setting' => $setting]);
        }elseif ($id == 'Selayang_Pandang') {
            return view('Admin/content/visimisiedit', ['about' => $about, 'data' => 'selayangPandang', 'setting' => $setting]);
        }else{
            echo 'gagal';
        }

    }
    function visimisiupdate($data, Request $textdata){
        $old =  About::first();
        $this->validate($textdata,[
            'text' => 'required'
        ]);
        
        if ($data == 'visi') {
            $about = About::where('visi', $old->visi)
                ->update(['visi' => $textdata->text]);
            return redirect('admin/visimisi');
        }elseif ($data == 'misi'){
            $about = About::where('misi', $old->misi)
                ->update(['misi' => $textdata->text]);
            return redirect('admin/visimisi');
        }elseif ($data == 'selayangPandang') {
            $about = About::where('selayangPandang', $old->selayangPandang)
                ->update(['selayangPandang' => $textdata->text]);
            return redirect('admin/visimisi');
        }else{
            echo 'gagal';
        }
    }


    // ------------------- Profil ---------------------------
    function profil(){
        $profil = Profil::first();
        $setting = Setting::first();
        return view('Admin/content/profil', ['profil' => $profil, 'setting' => $setting]);
    }
    function profiledit($key){
        switch($key){
            case 'profil':
                $setting = Setting::first();
                $profil = Profil::first();
                return view('Admin/content/profiledit', ['profil' => $profil, 'setting' => $setting]);
                break;
            case 'logo' :
                $setting = Setting::first();
                $profil = Profil::first();
                return view('Admin/content/profileditpic', ['profil' => $profil, 'setting' => $setting]);
                break;
        }
        
    }
    function profilupdate($key, Request $data){
        switch ($key){
            case 'profil':
                $setting = Setting::first();

                $this->validate($data,[
                    'nama' => 'required',
                    'kontak' => 'required',
                    'email' => 'required',
                    'alamat' => 'required'
                ]);

                $profil = Profil::where('idProfil', 1)
                    ->update([
                        'namaMasjid' => $data->nama,
                        'kontak' => $data->kontak,
                        'email' => $data->email,
                        'alamat' => $data->alamat
                    ]);
                return redirect('admin/profil');
                break;

            case 'logo':
                File::delete('img/core-img/logo.png');

                $pic = $data->file('foto');
                $pic->move(public_path('img/core-img'), 'logo.png');

                return redirect('admin/profil');
                break;
        }
        
    }
    function profilupdatelogo(){
        File::delete('img/core-img/logo.png');

        $pic = $data->file('foto');
        $pic->move(public_path('img/core-img'), 'logo.png');
    }


    // ----------------------- Struktural ---------------------
    function struktural(){
        $setting = Setting::first();
        $bidang = Bidang::get();
        $rolestruktur = rolestruktur::get();
        $struktur = struktur::get();
        return view('Admin/content/struktural', ['setting' => $setting, 'bidang' => $bidang, 'rolestruktur' => $rolestruktur, 'struktur' => $struktur]);
    }
    function strukturaltambah(){
        $setting = Setting::first();
        return view('Admin/content/strukturaltambah', ['setting' => $setting]);
    }
    function strukturaledit(Request $data){
         $setting = Setting::first();
         $bidang = Bidang::get();
         $rolestruktur = rolestruktur::get();
         $strukturs = struktur::where('idAnggota', $data->id);
         $struktur = $strukturs->first();
         return view('Admin/content/strukturaledit', ['setting' => $setting, 'bidang' => $bidang, 'rolestruktur' => $rolestruktur, 'struktur' => $struktur]);
    }
    function strukturaladd(Request $data){
        $this->validate($data, [
            'nama' => 'required',
            'bidang' => 'required',
            'jabatan' => 'required',
        ]);
        
        $struktur = new struktur;
        $struktur->namaAnggota = $data->nama;
        $struktur->anggota_idBidang = $data->bidang;
        $struktur->anggota_idRoleStruktur = $data->jabatan;
        $struktur->ket = $data->ket;
        $struktur->save();

        return redirect('admin/struktural');
    }
    function strukturalupdate($id, Request $data){
        $this->validate($data, [
            'nama' => 'required',
            'bidang' => 'required',
            'jabatan' => 'required'
        ]);
        $struktur = struktur::where('idAnggota', $id)
            ->update([
                'namaAnggota' => $data->nama,
                'anggota_idBidang' => $data->bidang,
                'anggota_idRoleStruktur' => $data->jabatan,
                'ket' => $data->ket
            ]);
        return redirect('admin/struktural');
    }
    function strukturaldelete(Request $data){
        $struktur = struktur::where('idAnggota', $data->id)
            ->delete();

        return redirect('admin/struktural');
    }
    
    // ------------------- Program Unggulan ----------------
    function program(){
        $setting = Setting::first();
        $bidang = Bidang::all();
        $program = program::all();
        return view('Admin/content/program', ['setting' => $setting, 'bidang' => $bidang, 'program' => $program]);
    }
    function programtambah(){
        $setting = Setting::first();
        return view('Admin/content/programtambah', ['setting' => $setting]);
    }
    function programadd(Request $data){
        $this->validate($data, [
            'nama' => 'required',
            'bidang' => 'required',
            'deskripsi' => 'required'
        ]);

        $program = new program;
        $program->namaProgram = $data->nama;
        $program->program_idBidang = $data->bidang;
        $program->deskripsiProgram = $data->deskripsi;
        $program->save();

        return redirect('admin/program');
    }
    function programedit(Request $data){
        $setting = Setting::first();
        $bidang = Bidang::get();
        $programs = program::where('idProgram', $data->id);
        $program = $programs->first();
        return view('Admin/content/programedit', ['setting' => $setting, 'bidang' => $bidang, 'program' => $program]);
    }
    function programupdate($id, Request $data){
        $this->validate($data, [
            'nama' => 'required',
            'bidang' => 'required',
            'deskripsi' => 'required'
        ]);
        $program = program::where('idProgram', $id)
            ->update([
                'namaProgram' => $data->nama,
                'program_idBidang' => $data->bidang,
                'deskripsiProgram' => $data->deskripsi
            ]);

        return redirect('admin/program');    
    }
    function programdelete(Request $data){
        $program = program::where('idProgram', $data->id)
            ->delete();

        return redirect('admin/program');
    }



    // ----------------------- Berita ------------------------
    function news(){
        $setting = Setting::first();
        $berita = berita::get()->sortByDesc('created_at');
        $bidang = Bidang::all();
        return view('Admin/content/news', ['setting' => $setting, 'berita' => $berita, 'bidang' => $bidang]);
    }
    function newsview(Request $data){
        $setting = Setting::first();
        $bidang = Bidang::all();
        $beritas = berita::where('idBerita', $data->id);
        $berita = $beritas->first();
        return view('Admin/content/newsview', ['setting' => $setting, 'berita' => $berita, 'bidang' => $bidang]);
    }
    function newstambah(){
        $setting = Setting::first();
        return view('Admin/content/newstambah', ['setting' => $setting]);
    }
    function newsadd(Request $data){
        $this->validate($data, [
            'judul' => 'required',
            'bidang' => 'required',
            'text' => 'required',
            'textdesc' => 'required'
        //     'picFile' =>'required'
        ]);
        $pic = $data->file('foto');
        $picname = $pic->getClientOriginalName();
        $picnames = sha1(rand()) . '_' . str_replace(' ', '_', $picname);
        $pic->move(public_path('img/news'), $picnames);

        $slug = Str::slug($data->judul, '_');
        $textdescs = Str::limit($data->textdesc, 150) . '...';
        $berita = new berita;
        $berita->judulBerita = $data->judul;
        $berita->berita_idBidang = $data->bidang;
        $berita->slug_judul = $slug;
        $berita->isiBerita = $data->text;
        $berita->beritaDesc = $textdescs;
        $berita->picBerita = $picnames;
        $berita->save();

        return redirect('admin/news');
    }
    function newsedit($key, Request $data){
        if($key=='berita'){
            $setting = Setting::first();
            $beritas = berita::where('idBerita', $data->id);
            $berita = $beritas->first();
            return view('Admin/content/newsedit', ['setting' => $setting, 'berita' => $berita]);
        }else if($key=='gambar'){
            $setting = Setting::first();
            $beritas = berita::where('idBerita', $data->id);
            $berita = $beritas->first();
            return view('Admin/content/newseditpic', ['setting' => $setting, 'berita' => $berita]);
        };
    }
    function newsupdate($key, $id, Request $data){
        if($key=='berita'){
            $this->validate($data, [
                'judul' => 'required',
                'bidang' => 'required',
                'text' => 'required',
            //     'picFile' =>'required'
            ]);
        
            $slug = Str::slug($data->judul, '_');
            $textdescs = Str::limit($data->textdesc, 150) . '...';
            $berita = berita::where('idBerita', $id)
                ->update([
                    'judulBerita' => $data->judul,
                    'slug_judul' => $slug,
                    'berita_idBidang' => $data->bidang,
                    'beritaDesc' => $textdescs,
                    'isiBerita' => $data->text
                ]);
            return redirect('admin/news');
        }else if($key=='gambar'){
            $berita = berita::where('idBerita', $data->id)->first();
            File::delete('img/news/'.$berita->picBerita);

            $pic = $data->file('foto');
            $picname = $pic->getClientOriginalName();
            $picnames = sha1(rand()) . '_' . str_replace(' ', '_', $picname);
            $pic->move(public_path('img/news'), $picnames);

            berita::where('idBerita', $id)->update([
                'picBerita' => $picnames
            ]);
            return redirect('admin/news');
        };
    }
    function newsdelete(Request $data){
        $berita = berita::where('idBerita', $data->id)->first();
        File::delete('img/news/'.$berita->picBerita);
        berita::where('idBerita', $data->id)->delete();

        return redirect('admin/news');
    }

    
    // -------------------- Kajian -------------------------
    function kajian(){
        $setting = Setting::first();
        $kajian = kajian::all();
        return view('Admin/content/kajian', ['setting' => $setting, 'kajian' => $kajian]);
    }
    function kajiantambah(){
        $setting = Setting::first();
        return view('Admin/content/kajiantambah', ['setting' => $setting]);
    }
    function kajianadd(Request $data){
        $this->validate($data, [
            'nama' => 'required',
            'hari' => 'required',
            'waktu' => 'required',
            'deskripsi' => 'required'
        ]);
        
        $kajian = new kajian;
        $kajian->namaKajian = $data->nama;
        $kajian->hariKajian = $data->hari;
        $kajian->waktuKajian = $data->waktu;
        $kajian->deskripsiKajian = $data->deskripsi;
        $kajian->save();

        return redirect('admin/kajian');
    }
    function kajianedit(Request $data){
        $setting = Setting::first();
        $kajians = kajian::where('idKajian', $data->id);
        $kajian = $kajians->first();
        return view('Admin/content/kajianedit', ['setting' => $setting, 'kajian' => $kajian]);
    }
    function kajianupdate($id, Request $data){
        $this->validate($data, [
            'nama' => 'required',
            'hari' => 'required',
            'waktu' => 'required',
            'deskripsi' => 'required'
        ]);
        $kajian = kajian::where('idKajian', $id)
            ->update([
                'namaKajian' => $data->nama,
                'hariKajian' => $data->hari,
                'waktuKajian' => $data->waktu,
                'deskripsiKajian' => $data->deskripsi
            ]);
        
        return redirect('admin/kajian');
    }
    function kajiandelete(Request $data){
        $kajian = kajian::where('idKajian', $data->id)
            ->delete();

        return redirect('admin/kajian');
    }



    // ---------------------- Donatur ---------------------
    function donatur(){
        $setting = Setting::first();
        return view('Admin/content/donatur', ['setting' => $setting]);
    }


    // --------------------- Keuangan -----------------------
    function keuangan(){
        $setting = Setting::first();
        return view('Admin/content/keuangan', ['setting' => $setting]);
    }



}
