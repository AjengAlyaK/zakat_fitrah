<?php

namespace App\Http\Controllers;

use App\Models\muzakki;
use App\Models\bayar_zakat;
use Illuminate\Http\Request;
use App\Models\mustahik_warga;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\mustahik_lainnya;
use App\Models\kategori_mustahik;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Session;


// Ajeng Alya Kartika Sari (217006056)
class HomeController extends Controller
{
    // simpan perubahan profile 
    

    // edit profile
    public function edit_profile($id){
        $user = Auth::user($id);
        return view('show.edit_profile', compact('user'));
    }

    // profile
    public function profile(){
        $user = Auth::user();
        return view('show.profile', compact('user'));
    }

    public function index()
    {
        return view('auth.login');
    }

    public function v_m($id)
    {
        $m = muzakki::find($id);
        return view('show.dashboard_view', compact('m'));
    }

    public function tambah_muzaki()
    {
        $kategori = kategori_mustahik::all();
        return view('show.halaman_tambah_muzaki', compact('kategori'));
    }

    public function save_muzaki(Request $request)
    {
        $muzaki = muzakki::create($request->all());
        
        return redirect()->back()->with('status', 'Muzaki berhasil ditambahkan');
    }

    public function kembali_ke_tambah()
    {
        return view('dashboard', ['muzaki'=>muzakki::all()]);
    }

    public function data_muzaki()
    {
        $muzaki = muzakki::all();

        return view('dashboard', compact('muzaki'));
    }

    public function edit_data_muzaki($id)
    {
        // $muzaki = muzakki::find($id);
        $muzaki = muzakki::with('kategori_mustahik')->findOrfail($id);

        return view('show.edit_data_muzaki', compact('muzaki'));
    }

    public function save_perubahan_muzaki(Request $request, $id)
    {
        $muzaki = muzakki::findOrfail($id);
        $muzaki->update($request->all());
        return redirect()->back()->with('status', 'Muzaki berhasil diubah');

    }

    public function delete_data_muzaki($id)
    {
        $muzaki = muzakki::find($id);

        $muzaki->delete();
        return redirect()->back()->with('status', 'Muzaki berhasil dihapus');
    }

    public function view_data_muzaki($id)
    {
        $muzaki = muzakki::find($id);

        return view('dashboard', compact('muzaki'));
    }


    // Kategori Mustahik

    public function kategori_mustahik()
    {
        $ctg_mustahik = kategori_mustahik::all();
        return view('show.kategori_mustahik', compact('ctg_mustahik'))->with('status', 'Kategori mustahik berhasil dihapus');;
    }

    public function tambah_kategori_mustahik()
    {
        return view('show.tambah_kategori_mustahik');
    }

    public function kembali_ke_tambah_km()
    {
        $ctg_mustahik = kategori_mustahik::all();
        return view('show.kategori_mustahik', compact('ctg_mustahik'));
    }

    public function save_kategori_mustahik(Request $request)
    {
        $kategori_mustahik = kategori_mustahik::create($request->all());
        
        return redirect()->back()->with('status', 'Kategori mustahik berhasil ditambahkan');
    }

    public function delete_kategori_mustahik($id)
    {
        $kategori_mustahik = kategori_mustahik::find($id);

        $kategori_mustahik->delete();

        return redirect()->back()->with('status', 'Kategori mustahik berhasil dihapus');;
    }

    public function edit_kategori_mustahik($id)
    {
        $k_mustahik = kategori_mustahik::find($id);

        return view('show.edit_kategori_mustahik', compact('k_mustahik'));
    }

    public function update_kategori_mustahik(Request $request, $id)
    {
        $k_mustahik = kategori_mustahik::findOrfail($id);
        $k_mustahik->update($request->all());
        return redirect()->back()->with('status', 'Kategori mustahik berhasil diubah');
    }

    public function kembali_ke_edit_k_mustahik()
    {
        $ctg_mustahik = kategori_mustahik::all();
        return view('show.kategori_mustahik',compact('ctg_mustahik'));
    }

    public function list_muzakki()
    {
        // berhasil mengambil data bayar zakat tetap harus menggunakan foreach, dengan command $muzaki->bayar_zakat
        $muzaki = muzakki::with('bayar_zakat')->get();
        // $muzaki = bayar_zakat::with('muzakki')->get();
        return view('show.list_muzaki', compact('muzaki'));
    }

    public function bayar_zakat($id)
    {
        $zakat = muzakki::with('bayar_zakat')->findOrFail($id);
        return view('show.pengumpulan_zakat_fitrah', compact('zakat'));
    }

    public function kembali_pengumpulan()
    {
        $muzaki = muzakki::all();
        return view('show.list_muzaki', compact('muzaki'));
    }

    public function muzaki_bayar(Request $request)
    {
        DB::table('bayar_zakats')->insert([
            'nama_KK' => $request->nama_KK,
            'muzakki_id' => $request->muzakki_id,
            'jumlah_tanggungan' => $request->jumlah_tanggungan,
            'jenis_bayar' => $request->jenis_bayar,
            'jumlah_tanggunganyangdibayar' => $request->jumlah_tanggunganyangdibayar,
            
            'bayar_beras' => $request->bayar_beras,
            'bayar_uang' => $request->bayar_uang,
        ]);

        DB::table('muzakkis')->where('id', $request->muzakki_id)->update([
            'keterangan' => $request->keterangan
        ]);
        // $muzaki_bayar = bayar_zakat::create($request->all());
        return redirect()->back()->with('status', 'Muzaki berhasil mengumpulkan zakat');
    }

    public function muzaki_sudah_bayar()
    {
        $muzaki = bayar_zakat::with('muzakki')->get();
        return view('show.muzaki_sudah_bayar', compact('muzaki'));
    }

    public function kembali_ke_bayar()
    {
        $muzaki = muzakki::all();
        return view('show.list_muzaki', compact('muzaki'));
    }

    public function delete_muzaki_bayar($id)
    {
        $m_bayar = bayar_zakat::find($id);

        $m_bayar->delete();
        return redirect()->back()->with('status', 'Data muzaki bayar zakat berhasil dihapus');
    }

    public function edit_muzaki_bayar($id)
    {
        $m_bayar = bayar_zakat::find($id);
        return view('show.edit_muzaki_bayar', compact('m_bayar'));
    }

    public function edit_data_muzaki_bayar(Request $request, $id)
    {
        $bz = bayar_zakat::findOrfail($id);
        $bz->update($request->all());

        return redirect()->back()->with('status', 'Data muzaki bayar zakat berhasil diupdate');
    }


    // Distribusi Zakat Fitrah
    
    public function distribusi_zfw()
    {
        // berhasil
        $muzaki = muzakki::with('kategori_mustahik')->get();
        return view('show.distribusi_zfw', compact('muzaki'));
    }

    public function warga_sudah_menerima_zakat()
    {
        $warga = mustahik_warga::all();
        return view('show.sudah_menerima_zakat', compact('warga'));
    }

    public function tambah_distribusi($id)
    {
        $warga = muzakki::with('kategori_mustahik')->findOrfail($id);
        return view('show.tambah_distribusi', compact('warga'));
    }

    public function tambah_mustahik_warga(Request $request)
    {
        DB::table('mustahik_wargas')->insert([
            'muzakki_id' => $request->muzakki_id,
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'hak' => $request->hak_beras,
            'hak_uang' => $request->hak_uang,
        ]);

        DB::table('muzakkis')->where('id', $request->muzakki_id)->update([
            'keterangan2' => $request->keterangan2
        ]);
        // $mustahik_warga = mustahik_warga::create($request->all());
        return redirect()->back()->with('status', 'Distribusi zakat fitrah warga berhasil ditambahkan');
    }

    public function edit_mustahik_menerima($id)
    {
        $mustahik = mustahik_warga::find($id);
        return view('show.edit_mustahik_menerima', compact('mustahik'));
    }

    public function save_edit_mustahik_menerima(Request $request, $id)
    {
        $mustahik = mustahik_warga::find($id);
        $mustahik->update($request->all());
        return redirect()->back()->with('status', 'Data mustahik warga menerima zakat fitrah berhasil diubah');
    }

    public function delete_mustahik_menerima($id)
    {
        $mustahik = mustahik_warga::find($id);
        $mustahik->delete();
        return redirect()->back()->with('status', 'Data mustahik warga menerima zakat fitrah berhasil dihapus');
    }

    public function distribusi_zfm()
    {
        $ml= mustahik_lainnya::with('kategori_mustahik')->get();
        return view('show.distribusi_zfm', compact('ml'));
    }

    public function tambah_mustahik_lainnya()
    {
        return view('show.tambah_mustahik_lainnya');
    }

    public function save_mustahik_lainnya(Request $request)
    {
        $ml = mustahik_lainnya::create($request->all());
        return redirect()->back()->with('status', 'Data mustahik lainnya berhasil ditambahkan');
    }

    public function delete_data_ml($id)
    {
        $ml = mustahik_lainnya::find($id);
        $ml->delete();
        return redirect()->back()->with('status', 'Data mustahik lainnya berhasil dihapus');
    }

    public function edit_data_ml($id)
    {
        $ml = mustahik_lainnya::find($id);
        return view('show.edit_data_ml', compact('ml'));
    }

    public function save_perubahan_ml(Request $request, $id)
    {
        $ml = mustahik_lainnya::find($id);
        $ml->update($request->all());
        return redirect()->back()->with('status', 'Data mustahik lainnya berhasil diubah');
    }

    public function laporan_pengumpulan()
    {
        $j_t = muzakki::sum('jumlah_tanggungan');
        $muzakki = muzakki::all();
        $b_b = bayar_zakat::sum('bayar_beras');
        $b_u = bayar_zakat::sum('bayar_uang');
        return view('show.laporan_pengumpulan', ['j_t'=>$j_t, 'muzakki'=>$muzakki, 'b_b'=>$b_b, 'b_u'=>$b_u]);
    }

    public function print_laporan_pengumpulan()
    {
        $j_t = muzakki::sum('jumlah_tanggungan');
        $muzakki = muzakki::all();
        $b_b = bayar_zakat::sum('bayar_beras');
        $b_u = bayar_zakat::sum('bayar_uang');
        $pdf = Pdf::loadView('pdf.laporan_pengumpulan', ['j_t'=>$j_t, 'muzakki'=>$muzakki, 'b_b'=>$b_b, 'b_u'=>$b_u]);
        return $pdf->download('laporan-pengumpulan-'.Carbon::now()->timestamp.'.pdf');
    }

    public function laporan_distribusi()
    {
        // $k_m = kategori_mustahik::all();
        $a = DB::table('muzakkis')->where('kategori_mustahik_id', '2')->count();
        $b = DB::table('mustahik_lainnyas')->where('kategori_mustahik_id', '5')->count();
        
        // row 1
        $r1a= DB::table('kategori_mustahiks')->where('id', '1')->value('nama_kategori');
        $r1b= DB::table('kategori_mustahiks')->where('id', '1')->value('jumlah_hak');  // hak_beras
        $r1c= DB::table('kategori_mustahiks')->where('id', '1')->value('hak_uang');
        $r1d = DB::table('muzakkis')->where('kategori_mustahik_id', '1')->count();    // banyak kk fakir

        // row 2
        $r2a= DB::table('kategori_mustahiks')->where('id', '2')->value('nama_kategori');
        $r2b= DB::table('kategori_mustahiks')->where('id', '2')->value('jumlah_hak');  // hak_beras
        $r2c= DB::table('kategori_mustahiks')->where('id', '2')->value('hak_uang');
        $r2d = DB::table('muzakkis')->where('kategori_mustahik_id', '2')->count();    // banyak kk miskin

        // row 3
        $r3a= DB::table('kategori_mustahiks')->where('id', '3')->value('nama_kategori');
        $r3b= DB::table('kategori_mustahiks')->where('id', '3')->value('jumlah_hak');  // hak_beras
        $r3c= DB::table('kategori_mustahiks')->where('id', '3')->value('hak_uang');
        $r3d = DB::table('muzakkis')->where('kategori_mustahik_id', '3')->count();    // banyak kk mampu

        // row 5
        $r5a= DB::table('kategori_mustahiks')->where('id', '5')->value('nama_kategori');
        $r5b= DB::table('kategori_mustahiks')->where('id', '5')->value('jumlah_hak');  // hak_beras
        $r5c= DB::table('kategori_mustahiks')->where('id', '5')->value('hak_uang');
        $r5d = DB::table('mustahik_lainnyas')->where('kategori_mustahik_id', '5')->count();    // banyak kk amilin

        // row 6
        $r6a= DB::table('kategori_mustahiks')->where('id', '6')->value('nama_kategori');
        $r6b= DB::table('kategori_mustahiks')->where('id', '6')->value('jumlah_hak');  // hak_beras
        $r6c= DB::table('kategori_mustahiks')->where('id', '6')->value('hak_uang');
        $r6d = DB::table('mustahik_lainnyas')->where('kategori_mustahik_id', '6')->count();    // banyak kk fisabilillah

        // row 7
        $r7a= DB::table('kategori_mustahiks')->where('id', '7')->value('nama_kategori');
        $r7b= DB::table('kategori_mustahiks')->where('id', '7')->value('jumlah_hak');  // hak_beras
        $r7c= DB::table('kategori_mustahiks')->where('id', '7')->value('hak_uang');
        $r7d = DB::table('mustahik_lainnyas')->where('kategori_mustahik_id', '7')->count();    // banyak kk mualaf

        // row 8
        $r8a= DB::table('kategori_mustahiks')->where('id', '8')->value('nama_kategori');
        $r8b= DB::table('kategori_mustahiks')->where('id', '8')->value('jumlah_hak');  // hak_beras
        $r8c= DB::table('kategori_mustahiks')->where('id', '8')->value('hak_uang');
        $r8d = DB::table('mustahik_lainnyas')->where('kategori_mustahik_id', '8')->count();    // banyak kk ibnu sabil

        // return view('show.laporan_distribusi', ['k_m'=> $k_m, 'a'=>$a, 'b'=>$b]);
        return view('show.laporan_distribusi', ['r1a'=>$r1a, 'r1b'=>$r1b, 'r1c'=>$r1c, 'r1d'=>$r1d, 'r2a'=>$r2a, 'r2b'=>$r2b, 'r2c'=>$r2c, 'r2d'=>$r2d, 'r3a'=>$r3a, 'r3b'=>$r3b, 'r3c'=>$r3c, 'r3d'=>$r3d, 'r5a'=>$r5a, 'r5b'=>$r5b, 'r5c'=>$r5c, 'r5d'=>$r5d, 'r6a'=>$r6a, 'r6b'=>$r6b, 'r6c'=>$r6c, 'r6d'=>$r6d, 'r7a'=>$r7a, 'r7b'=>$r7b, 'r7c'=>$r7c, 'r7d'=>$r7d, 'r8a'=>$r8a, 'r8b'=>$r8b, 'r8c'=>$r8c, 'r8d'=>$r8d]);
    }

    public function print_laporan_distribusi()
    {
        // row 1
        $r1a= DB::table('kategori_mustahiks')->where('id', '1')->value('nama_kategori');
        $r1b= DB::table('kategori_mustahiks')->where('id', '1')->value('jumlah_hak');  // hak_beras
        $r1c= DB::table('kategori_mustahiks')->where('id', '1')->value('hak_uang');
        $r1d = DB::table('muzakkis')->where('kategori_mustahik_id', '1')->count();    // banyak kk fakir

        // row 2
        $r2a= DB::table('kategori_mustahiks')->where('id', '2')->value('nama_kategori');
        $r2b= DB::table('kategori_mustahiks')->where('id', '2')->value('jumlah_hak');  // hak_beras
        $r2c= DB::table('kategori_mustahiks')->where('id', '2')->value('hak_uang');
        $r2d = DB::table('muzakkis')->where('kategori_mustahik_id', '2')->count();    // banyak kk miskin

        // row 3
        $r3a= DB::table('kategori_mustahiks')->where('id', '3')->value('nama_kategori');
        $r3b= DB::table('kategori_mustahiks')->where('id', '3')->value('jumlah_hak');  // hak_beras
        $r3c= DB::table('kategori_mustahiks')->where('id', '3')->value('hak_uang');
        $r3d = DB::table('muzakkis')->where('kategori_mustahik_id', '3')->count();    // banyak kk mampu

        // row 5
        $r5a= DB::table('kategori_mustahiks')->where('id', '5')->value('nama_kategori');
        $r5b= DB::table('kategori_mustahiks')->where('id', '5')->value('jumlah_hak');  // hak_beras
        $r5c= DB::table('kategori_mustahiks')->where('id', '5')->value('hak_uang');
        $r5d = DB::table('mustahik_lainnyas')->where('kategori_mustahik_id', '5')->count();    // banyak kk amilin

        // row 6
        $r6a= DB::table('kategori_mustahiks')->where('id', '6')->value('nama_kategori');
        $r6b= DB::table('kategori_mustahiks')->where('id', '6')->value('jumlah_hak');  // hak_beras
        $r6c= DB::table('kategori_mustahiks')->where('id', '6')->value('hak_uang');
        $r6d = DB::table('mustahik_lainnyas')->where('kategori_mustahik_id', '6')->count();    // banyak kk fisabilillah

        // row 7
        $r7a= DB::table('kategori_mustahiks')->where('id', '7')->value('nama_kategori');
        $r7b= DB::table('kategori_mustahiks')->where('id', '7')->value('jumlah_hak');  // hak_beras
        $r7c= DB::table('kategori_mustahiks')->where('id', '7')->value('hak_uang');
        $r7d = DB::table('mustahik_lainnyas')->where('kategori_mustahik_id', '7')->count();    // banyak kk mualaf

        // row 8
        $r8a= DB::table('kategori_mustahiks')->where('id', '8')->value('nama_kategori');
        $r8b= DB::table('kategori_mustahiks')->where('id', '8')->value('jumlah_hak');  // hak_beras
        $r8c= DB::table('kategori_mustahiks')->where('id', '8')->value('hak_uang');
        $r8d = DB::table('mustahik_lainnyas')->where('kategori_mustahik_id', '8')->count();    // banyak kk ibnu sabil

        $pdf = Pdf::loadView('pdf.laporan_distribusi', ['r1a'=>$r1a, 'r1b'=>$r1b, 'r1c'=>$r1c, 'r1d'=>$r1d, 'r2a'=>$r2a, 'r2b'=>$r2b, 'r2c'=>$r2c, 'r2d'=>$r2d, 'r3a'=>$r3a, 'r3b'=>$r3b, 'r3c'=>$r3c, 'r3d'=>$r3d, 'r5a'=>$r5a, 'r5b'=>$r5b, 'r5c'=>$r5c, 'r5d'=>$r5d, 'r6a'=>$r6a, 'r6b'=>$r6b, 'r6c'=>$r6c, 'r6d'=>$r6d, 'r7a'=>$r7a, 'r7b'=>$r7b, 'r7c'=>$r7c, 'r7d'=>$r7d, 'r8a'=>$r8a, 'r8b'=>$r8b, 'r8c'=>$r8c, 'r8d'=>$r8d]);
        return $pdf->download('laporan-distribusi-'.Carbon::now()->timestamp.'.pdf');
    }

    public function logout()
    {
        \Session::flush();
        Auth::logout();

        // return view('auth.login');
        return redirect('/');
    }
}

