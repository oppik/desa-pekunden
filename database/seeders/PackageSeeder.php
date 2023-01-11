<?php

namespace Database\Seeders;

use App\Models\Package;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $onthel = new Package();
        $onthel->name = 'Onthel';
        $onthel->price = '89000';
        $onthel->image = '/img/onthel.jpg';
        $onthel->description = '<p><b>Rute</b></p><ul><li>Kampung Mino Nopia</li><li>Kebun Buah Naga</li><li>Omah Manggleng</li><li>Omah Batik</li><li>Omah Joglo</li></ul><p><b>Fasilitas</b></p><p>Include sepeda onthel, tiket masuk + praktik, makan siang "Gada Mendhem", air mineral, dan tour guide.</p>';
        $onthel->created_at = Carbon::now();
        $onthel->updated_at = Carbon::now();
        $onthel->save();

        $livein = new Package();
        $livein->name = 'Live In';
        $livein->price = '269500';
        $livein->image = '/img/livein.jpg';
        $livein->description = '<p><b>Fasilitas:</b></p><p><b>Hari ke 1</b><br>Transportasi sepeda, welcome dance, welcome drink, snack pagi, kebuh buah naga, explore sawah kd.kambang, kampung garmen UMKM Manggleng, Makan Siang Gada Mendem, Medang sore.</p><p><span style="font-weight: bolder;">Hari ke 2</span><br>Sarapan pagi, olahraga pagi, kampoeng nopia mino, praktik pembuatan nopia mino, makan siang, oemah batik, praktik membatik, medang sore, kembali ke home stay, sayonara.<br></p><span style="font-weight: bolder;">Malam hari</span><br>Home stay, makan malam, oemah gamelan.';
        $livein->created_at = Carbon::now();
        $livein->updated_at = Carbon::now();
        $livein->save();

        $trip = new Package();
        $trip->name = 'Funtastic Trip';
        $trip->price = '348900';
        $trip->image = '/img/funtastic.jpg';
        $trip->description = '<p><b>Fasilitas:</b></p><p><b>Hari ke 1</b></p><p>Transportasi odong-odong, welcome dance, welcome drink, snack pagi, ekspolore kota lama Banyumas, museum wayang, taman sari, sumur mas, rumah Dr. Gumbreg, rumah pangeran, bekas bank afdeling, rumah lokasi siti nurbaya, kelnteng boen tek bio, masjid nur sulaiman, makan siang tradisional, makan adipati mrapat dawuhan, kembali ke home stay, istirahat dan medang sore.</p><p><b>Hari ke 2</b></p><p>Sarapan pagi, olahraga pagi, transportasi sepeda, kampoeng nopia mino, praktik pembuatan nopia mino, oemah batik, makan siang, oemah manggleng, kebun buah naga, kampung garmen, kembali ke home stay, sayonara.</p><p><b>Hari ke 3</b></p><p>Home stay, makan malam, oemah gamelan.<br></p>';
        $trip->created_at = Carbon::now();
        $trip->updated_at = Carbon::now();
        $trip->save();
    }
}
