<?php

namespace Database\Seeders;
use App\Models\MasterPic;
use App\Models\MasterVendor;
use App\Models\User;
use App\Models\Asset;
use App\Models\Aktivitas;
use App\Models\MasterKendaraan;
use App\Models\MasterLokasiAsset;
use App\Models\MasterAktivitas;
use App\Models\Perencanaan;
use App\Models\MasterJenisPengajuan;
use App\Models\MasterCategoryAsset;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Asset::factory(10)->create();
        User::factory()->create([
            'name' => 'general-affair',
            'email' => 'ga@gmail.com',
            'level' => 'general-affair',
            'password' => bcrypt('password')
        ]);
        User::factory()->create([
            'name' => 'management',
            'email' => 'management@gmail.com',
            'level' => 'management',
            'password' => bcrypt('password')
        ]);
        User::factory()->create([
            'name' => 'pegawai',
            'email' => 'pegawai@gmail.com',
            'level' => 'pegawai',
            'password' => bcrypt('password')
        ]);

        Aktivitas::factory()->create([
            'title' => 'tes',
            'ulangi' => 'oneday',
            'start_date' => '2050-11-11',
            'end_date' =>  '2050-11-11',
            'prioritas' => 'rendah'
        ]);
        MasterKendaraan::factory()->create([
            'mk_nama_kendaraan' => 'toyota avanza',
            'mk_no_polisi' => 'AK 9811 OK',
            'mk_jenis' => 'Roda 4',
            'mk_merk' => 'toyota',
            'mk_warna' => 'Merah maroon',
            'mk_perlengkapan' => 'STNK-BPKB',
            'mk_status' => 'tersedia',
            'mk_bahan_bakar' => '10 liter',
            'mk_kilometer' => '277',
            'mk_kondisi_lain' => 'tidak ada'
        ]);
        MasterKendaraan::factory()->create([
            'mk_nama_kendaraan' => 'Honda Vario Old',
            'mk_no_polisi' => 'EJ 7663 OK',
            'mk_jenis' => 'Roda 2',
            'mk_merk' => 'honda',
            'mk_warna' => 'putih',
            'mk_perlengkapan' => 'STNK-BPKB',
            'mk_status' => 'tersedia',
            'mk_bahan_bakar' => '2 liter',
            'mk_kilometer' => '397',
            'mk_kondisi_lain' => 'tidak ada'
        ]);
        // Perencanaan::factory()->create([
        //     'ap_bulan' => '-11',
        //     'ap_tahun' => '2022'
        // ]);
        MasterPic::factory()->create([
            'mp_nama' => 'PIC 1'
        ]);
        MasterPic::factory()->create([
            'mp_nama' => 'PIC 2'
        ]);
        MasterPic::factory()->create([
            'mp_nama' => 'PIC 3'
        ]);

        MasterLokasiAsset::factory()->create([
            'mla_lokasi_asset' => 'Lantai Bawah'
        ]);

        MasterLokasiAsset::factory()->create([
            'mla_lokasi_asset' => 'Lantai Atas'
        ]);

        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kerapian meja dan kursi'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan meja kerja'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Ban pijakan kembali ke posisinya'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan meja panjang + taplak'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'membersihkan lantai atas'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan lantai'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan & kerapian meja pantry (meja utama & lipat)'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan & kerapian kitchen set'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pemberian pakan'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Monitoring kondisi ikan'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Monitoring & Evaluasi Pakan Ikan'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pembersihan kotoran ikan'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pergantian mesin besar dan kecil'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Monitoring kondisi air'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Perawatan harian mobil (menyalakan mesin & AC)'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Monitoring keberadaan (koordinasi dgn pengguna)'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Menutup & membuka cover'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Perawatan harian motor (menyalakan mesin)'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Mengeluarkan (pagi) dan memasukkan (malam) motor'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Cek bensin dan ban (isi bensin & tambah angin)'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Monitoring keberadaan (koordinasi dgn pengguna)'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kerapian rak piring transit'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Monitoring petugas piket'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan & kerapian karpet anak tangga'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan lantai pantry'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Monitor kondisi lampu-lampu + ganti lampu mati'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Ketersediaan wipol'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Monitoring piket: Kebersihan toilet'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Monitor saluran air (floor drain) toilet'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kerapian sabun-sabun cuci piring'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kerapian gantungan: pel, sikat panjang, jala ikan, dll'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kerapian batu-batu pijak'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan & kerapian mushola'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Jemur rak mukena + sajadah + sarung'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Penyiraman tanaman'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Treatment tanaman: lap daun dan cabut daun kering'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan area depan gerbang ringan (sapu)'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Penataan, penempatan, dan kebersihan alat-alat pertukangan'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kerapian barang-barang bawah'
        ]);

        MasterVendor::factory()->create([
            'mv_nama_vendor' => 'Toko komputer',
            'mv_lokasi' => 'tangsel'
        ]);
        MasterVendor::factory()->create([
            'mv_nama_vendor' => 'Toko Matrial',
            'mv_lokasi' => 'tangsel'
        ]);
        MasterVendor::factory()->create([
            'mv_nama_vendor' => 'Toko Mable',
            'mv_lokasi' => 'tangsel'
        ]);
        MasterJenisPengajuan::factory()->create([
            'mjp_jenis' => 'pengadaan barang',
        ]);
        MasterJenisPengajuan::factory()->create([
            'mjp_jenis' => 'pengadaan jasa',
        ]);
        MasterCategoryAsset::factory()->create([
            'mca_category' => 'elektronik',
        ]);
        MasterCategoryAsset::factory()->create([
            'mca_category' => 'Aksesories',
        ]);
        MasterCategoryAsset::factory()->create([
            'mca_category' => 'properti & furniture',
        ]);
        MasterCategoryAsset::factory()->create([
            'mca_category' => 'kendaraan',
        ]);

    }
}
