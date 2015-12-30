<?php

namespace Petfinder\Prefectures;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PrefectureTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('prefectures')->insert(array(
            
        ));

        DB::table('permissions')->insert(array(
            array(
                'name' => 'prefectures.prefecture.view',
                'readable_name' => 'View Prefecture'
            ),
            array(
                'name' => 'prefectures.prefecture.create',
                'readable_name' => 'Create Prefecture'
            ),
            array(
                'name' => 'prefectures.prefecture.edit',
                'readable_name' => 'Update Prefecture'
            ),
            array(
                'name' => 'prefectures.prefecture.delete',
                'readable_name' => 'Delete Prefecture'
            )
        ));

        DB::table('settings')->insert(array(
            // Uncomment  and edit this section for entering value to settings table.
            /*
            array(
                'key'      => 'prefectures.prefecture.key',
                'name'     => 'Some name',
                'value'    => 'Some value',
                'type'     => 'Default',
            ),
            */
        ));
    }
}
