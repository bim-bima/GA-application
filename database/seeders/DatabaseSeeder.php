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
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pengurasan semi (ganti 2/3 air)'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pengurasan full (kosongkan kolam)'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pembelian pakan ikan'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pengurasan dan pembersihan filter ember - full'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pembersihan lumut di dinding & bibir kolam'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pembelian / penambahan ikan baru'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pembersihan mesin besar dan kecil'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Diskusi perbaikan & pengembangan aquarium'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pengurasan Aquarium'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pembersihan batu karang & kayu pohon hias'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pembersihan tanaman liar aquarium'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pembasmian hama siput aquarium'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pembersihan dinding kaca, lampu aquarium & box filter'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pembersihan filter Aquarium'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Perbaikan / penggantian mesin aquarium'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Perbaikan / penggantian lampu aquarium'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Penataan kembali desain aquascape'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Penambahan tanaman hias aquarium'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan mobil: cuci body mobil'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan mobil: bersihkan  interior mobil'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pembelian bensin'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Penambahan angin ban'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Semir ban mobil'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Cek angin dan semir ban serep'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Ganti ban + tambal ban jika bocor'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Poles body mobil'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pembersihan mesin mobil'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Perpanjangan STNK mobil'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Penggantian plat nomor mobil'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Servis berkala mobil'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Penggantian oli'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Perbaikan (body & mesin) jika bermasalah'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pengaturan posisi mobil di akhir pekan (koordinasi)'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Diskusi perbaikan & pengembangan'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan motor: cuci motor'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Poles body motor'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Servis berkala motor'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Cek & perbaikan (body & mesin) motor'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Perpanjangan STNK motor'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pergantian plat nomor motor'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Diskusi perbaikan & pengembangan Motor'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan pintu-jendela aluminium+kaca'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan kipas angin & lampu gantung (atas)'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Perbaikan meja & kursi rusak'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan glassboard'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Servis AC (cuci + perbaikan)'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan printer-printer'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan sound system'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan box + sepeda hias'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Perbaikan meja pingpong'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Diskusi perbaikan & pengembangan Area Kerja/Lantai Atas'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan kipas angin, lampu gantung, projector (bawah)'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan pintu kayu, sliding, dan gerbang garasi'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan lantai garasi'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Diskusi perbaikan & pengembangan Lantai Bawah'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan kipas angin & lampu gantung'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan Lukisan'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan railing tangga'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Isi ulang pemantik api / pembelian pemantik api'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Maintenance kebersihan: magic com, kompor, dispenser'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan jendela kaca'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan cermin ukiran'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan wastafel & cermin'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Diskusi perbaikan & pengembangan'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan lampu dan wadah/penutupnya'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Sikat lantai Mushola'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Sikat lantai Toilet'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Sikat kloset'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Sikat lantai dinding'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan ember, gayung, dan kran air'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Ketersediaan sabun batangan'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Sikat /steam lantai dasar area wudhu'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Laundry mukena + sajadah + sarung'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan cermin mushola'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan dinding & langit-langit mushola'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Diskusi perbaikan & pengembangan Mushola'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Diskusi perbaikan & pengembangan Toilet'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Treatment khusus: pembersihan daun tanaman jalar'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kerapian posisi dan kondisi tanaman'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pembersihan pot & tatakan air'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Jemur tanaman indoor yg besar ke luar'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Penambahan tanaman indoor & outdoor'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Diskusi perbaikan & pengembangan Tanaman'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan area parkir motor atas'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kerapian area parkir motor atas'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kebersihan area depan gerbang berkala'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Monitor talang-talang Atap'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Cek & perbaikan atap bocor'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Diskusi perbaikan & pengembangan atap'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Diskusi rencana pencarian vendor baru'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Monitoring pembuatan storage'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Konsep penataan barang-barang storage'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Kerapian barang-barang bawah'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pemasangan perangkap tikus manual'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Perawatan alat Pest Repeller'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Monitoring pergerakan hama'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Basmi kecoa di area wudhu dan toilet'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Basmi jalur semut & tutup lubang sarang'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pengolesan cairan agenda (cegah rayap)'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Diskusi rencana hidroponik'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Monitor sistem perangkat hidroponik'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Penyemaian'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Pembuatan larutan & monitor kadarnya'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Penanaman'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Monitoring progres hidroponik'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Diskusi perbaikan & pengembangan'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Perbaikan tools rusak'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Menerima tamu dari lingkungan kantor'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Menawarkan dan menjamu minuman'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Menawarkan dan menyiapkan makan'
        ]);
        MasterAktivitas::factory()->create([
            'ma_nama_aktivitas' => 'Menerima tamu (klien & partner)'
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
