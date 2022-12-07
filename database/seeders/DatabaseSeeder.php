<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gudang;
use App\Models\Rak;
use App\Models\Kategori;
use App\Models\Barang;
use App\Models\User;

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

        User::create([
            'name' => 'Nusalendra Putra Restu Bumi',
            'username' => 'Nusa',
            'email' => 'nusalendraa@gmail.com',
            'password' => bcrypt('wowdewa123'),
            'role' => 'admin'
        ]);
        
        User::create([
            'name' => 'Hasyir Adza',
            'username' => 'Hasyir',
            'email' => 'hasyir@gmail.com',
            'password' => bcrypt('wowdewa123'),
            'role' => 'customer'
        ]);

        Gudang::create([
            'name' => 'Gudang Utama'
        ]);

        // Kategori::create([
        //     'name' => 'Buku'
        // ]);

        // Kategori::create([
        //     'name' => 'Alat Tulis'
        // ]);

        // Kategori::create([
        //     'name' => 'Komputer & Aksesoris'
        // ]);
        
        // Barang::create([
        //     'rak_id' => 2,
        //     'kategori_id' => 1,
        //     'name' => 'Laskar Pelangi',
        //     'stock' => 20,
        //     'harga' => 20000,
        //     'deskripsi' => 'Laskar Pelangi merupakan novel pertama karya Andrea Hirata yang diterbitkan pertama kali pada tahun 2005 oleh penerbit Bentang Pustaka, Yogyakarta. Novel tersebut merupakan buku pertama dari tetralogi Laskar Pelangi. Ketiga novel berikutnya adalah Sang Pemimpi, Edensor, dan Maryamah Karpov.'
        // ]);

        // Barang::create([
        //     'rak_id' => 2,
        //     'kategori_id' => 1,
        //     'name' => 'Ayah',
        //     'stock' => 10,
        //     'harga' => 10000,
        //     'deskripsi' => 'Ayah adalah sebuah novel fiksi yang ditulis Andrea Hirata, dan di terbitkan oleh Bentang Pustaka pada 2015. Novel ini berkisah tentang perjuangan serta perasaan sayang seorang ayah kepada anaknya, tanpa mengenal ikatan darah sekalipun.'
        // ]);
    
        // Barang::create([
        //     'rak_id' => 1,
        //     'kategori_id' => 2,
        //     'name' => 'Pensil',
        //     'stock' => 100,
        //     'harga' => 5000
        // ]);

        // Barang::create([
        //     'rak_id' => 3,
        //     'kategori_id' => 3,
        //     'name' => 'MOUSE 2.4GHZ WIRELESS WITH USB RECEIVER MOUSE 4D - TANPA KABEL',
        //     'stock' => 80,
        //     'harga' => 50000
        // ]);
    }
}
