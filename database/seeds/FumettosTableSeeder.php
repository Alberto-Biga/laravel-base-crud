<?php

use Illuminate\Database\Seeder;
use App\Models\Fumetto;
class FumettosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fumettos  = config( 'fumettos' );
        foreach ($fumettos as $fumetto){
            $new_fumetto = new Fumetto();

            $new_fumetto->fill( $fumettos );
            $new_fumetto->save();
        }
    }
}
