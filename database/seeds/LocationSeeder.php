<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $items = [
//            ['id' => 1, 'name' => 'Kampala','region'=>'Central'],
//            ['id' => 2, 'name' => 'Mbarara','region'=>'West'],
//            ['id' => 3, 'name' => 'Masindi','region'=>'West'],
//            ['id' => 4, 'name' => 'Gulu','region'=>'North'],
//            ['id' => 5, 'name' => 'Mbale','region'=>'East'],
//            ['id' => 6, 'name' => 'Nakasongola','region'=>'Central'],
//            ['id' => 7, 'name' => 'Lira','region'=>'North'],
//        ];
//
//        foreach ($items as $item) {
//
//            DB::table('locations')->insert([
//                'id'=>$item->id,
//                'name' => $item->name,
//                'region' => $item->region,
//            ]);
//        }



        DB::table('locations')->insert(array(
            array(
                'id' => 1, 'name' => 'Kampala','region'=>'Central'
            ),
            array(
                'id' => 2, 'name' => 'Mbarara','region'=>'West'
            ),
            array(
                'id' => 3, 'name' => 'Masindi','region'=>'West'
            ),
            array(
                'id' => 4, 'name' => 'Gulu','region'=>'North'
            ),
            array(
                'id' => 5, 'name' => 'Mbale','region'=>'East'
            ),
            array(
                'id' => 6, 'name' => 'Nakasongola','region'=>'Central'
            ),
            array(
                'id' => 7, 'name' => 'Lira','region'=>'North'
            ),
        ));


    }
}
