<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('videos')->delete();
        
        \DB::table('videos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'youtube_id' => 'b1J39WQFvSs',
                'geinin_id' => 5,
                'created_at' => '2018-12-04 15:15:15',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'youtube_id' => 'xieBTWvqcEk',
                'geinin_id' => 5,
                'created_at' => '2018-12-04 17:49:20',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'youtube_id' => 'Q8eiPBglFyo',
                'geinin_id' => 3,
                'created_at' => '2018-12-05 02:25:52',
                'updated_at' => '2018-12-05 02:25:52',
            ),
            3 => 
            array (
                'id' => 6,
                'youtube_id' => '9ciNCXxu3Fk',
                'geinin_id' => 1,
                'created_at' => '2018-12-05 02:27:26',
                'updated_at' => '2018-12-05 02:27:26',
            ),
            4 => 
            array (
                'id' => 7,
                'youtube_id' => 'TsHZwn5EBoQ',
                'geinin_id' => 2,
                'created_at' => '2018-12-05 02:29:39',
                'updated_at' => '2018-12-05 02:29:39',
            ),
            5 => 
            array (
                'id' => 8,
                'youtube_id' => 'wZSxXYqm4ik',
                'geinin_id' => 6,
                'created_at' => '2018-12-05 02:30:32',
                'updated_at' => '2018-12-05 02:30:32',
            ),
            6 => 
            array (
                'id' => 9,
                'youtube_id' => '5cWZhw3rYM0',
                'geinin_id' => 7,
                'created_at' => '2018-12-05 02:31:16',
                'updated_at' => '2018-12-05 02:31:16',
            ),
            7 => 
            array (
                'id' => 10,
                'youtube_id' => 'Nakd3PM3md0',
                'geinin_id' => 8,
                'created_at' => '2018-12-05 02:31:46',
                'updated_at' => '2018-12-05 02:31:46',
            ),
            8 => 
            array (
                'id' => 11,
                'youtube_id' => '6XDjA9d_05M',
                'geinin_id' => 9,
                'created_at' => '2018-12-05 02:32:36',
                'updated_at' => '2018-12-05 02:32:36',
            ),
            9 => 
            array (
                'id' => 12,
                'youtube_id' => '4UNkJE4s48c',
                'geinin_id' => 11,
                'created_at' => '2018-12-05 02:33:59',
                'updated_at' => '2018-12-05 02:33:59',
            ),
            10 => 
            array (
                'id' => 13,
                'youtube_id' => 'Y3OYKeGbNzQ',
                'geinin_id' => 12,
                'created_at' => '2018-12-05 02:34:46',
                'updated_at' => '2018-12-05 02:34:46',
            ),
            11 => 
            array (
                'id' => 14,
                'youtube_id' => 'Pa4xR4AhEKo',
                'geinin_id' => 13,
                'created_at' => '2018-12-05 02:36:03',
                'updated_at' => '2018-12-05 02:36:03',
            ),
            12 => 
            array (
                'id' => 15,
                'youtube_id' => 'xPTXxRA394c',
                'geinin_id' => 14,
                'created_at' => '2018-12-05 02:36:49',
                'updated_at' => '2018-12-05 02:36:49',
            ),
            13 => 
            array (
                'id' => 16,
                'youtube_id' => 'HeQgMWn3D38',
                'geinin_id' => 16,
                'created_at' => '2018-12-05 02:37:42',
                'updated_at' => '2018-12-05 02:37:42',
            ),
            14 => 
            array (
                'id' => 17,
                'youtube_id' => 'KFvfNh8kbg4',
                'geinin_id' => 7,
                'created_at' => '2018-12-05 05:43:09',
                'updated_at' => '2018-12-05 05:43:09',
            ),
            15 => 
            array (
                'id' => 18,
                'youtube_id' => 'o4v2W8I_wyo',
                'geinin_id' => 6,
                'created_at' => '2018-12-05 05:47:28',
                'updated_at' => '2018-12-05 05:47:28',
            ),
            16 => 
            array (
                'id' => 19,
                'youtube_id' => 'CmTziW4tcng',
                'geinin_id' => 1,
                'created_at' => '2018-12-05 05:50:02',
                'updated_at' => '2018-12-05 05:50:02',
            ),
            17 => 
            array (
                'id' => 20,
                'youtube_id' => 'f0vFi21K8BM',
                'geinin_id' => 2,
                'created_at' => '2018-12-05 05:50:26',
                'updated_at' => '2018-12-05 05:50:26',
            ),
            18 => 
            array (
                'id' => 21,
                'youtube_id' => 'yMuMdz7nGUM',
                'geinin_id' => 3,
                'created_at' => '2018-12-05 05:50:54',
                'updated_at' => '2018-12-05 05:50:54',
            ),
            19 => 
            array (
                'id' => 22,
                'youtube_id' => 'z3AFlqqxqJs',
                'geinin_id' => 8,
                'created_at' => '2018-12-05 05:52:56',
                'updated_at' => '2018-12-05 05:52:56',
            ),
            20 => 
            array (
                'id' => 23,
                'youtube_id' => 'E22VJZFGed4',
                'geinin_id' => 9,
                'created_at' => '2018-12-05 05:54:44',
                'updated_at' => '2018-12-05 05:54:44',
            ),
            21 => 
            array (
                'id' => 24,
                'youtube_id' => '3zupJ5BboJo',
                'geinin_id' => 11,
                'created_at' => '2018-12-05 05:56:18',
                'updated_at' => '2018-12-05 05:56:18',
            ),
            22 => 
            array (
                'id' => 25,
                'youtube_id' => 'iqqX6de2CNY',
                'geinin_id' => 12,
                'created_at' => '2018-12-05 05:56:52',
                'updated_at' => '2018-12-05 05:56:52',
            ),
            23 => 
            array (
                'id' => 26,
                'youtube_id' => 'AID47o4Jbtw',
                'geinin_id' => 13,
                'created_at' => '2018-12-05 05:57:31',
                'updated_at' => '2018-12-05 05:57:31',
            ),
            24 => 
            array (
                'id' => 27,
                'youtube_id' => 'AslvLTReeQs',
                'geinin_id' => 14,
                'created_at' => '2018-12-05 05:58:35',
                'updated_at' => '2018-12-05 05:58:35',
            ),
        ));
        
        
    }
}