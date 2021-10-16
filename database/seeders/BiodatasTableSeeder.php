<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biodatas = [
             ['name'=>'Fani Ramadhanty', 'bornDate'=>'2003-11-13','gender'=>'Perempuan','address'=>'Cangkuang Wetan',
             'religion'=>'islam','age'=>17,'hobby'=>'menggambar'],
             ['name'=>'Syifa Siti Khumairah', 'bornDate'=>'2004-08-15','gender'=>'Perempuan','address'=>'Cangkuang Wetan',
             'religion'=>'islam','age'=>17,'hobby'=>'menggambar'],
             ['name'=>'Abelina Aulia', 'bornDate'=>'2003-12-17','gender'=>'Perempuan','address'=>'Marghayu',
             'religion'=>'islam','age'=>17,'hobby'=>'menggambar'],
             ['name'=>'Silvi Damayanti', 'bornDate'=>'2004-05-25','gender'=>'Perempuan','address'=>'Cangkuang Wetan',
             'religion'=>'islam','age'=>17,'hobby'=>'menggambar'],
             ['name'=>'Adya Eka Amelia', 'bornDate'=>'2004-03-13','gender'=>'Perempuan','address'=>'Cibedug Girang',
             'religion'=>'islam','age'=>17,'hobby'=>'menggambar']
        ];

        //masukan data ke Database
        DB::table('biodatas')->insert($biodatas);
    }
}
