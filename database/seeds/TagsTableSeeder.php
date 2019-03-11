<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'age',
                'link' => '/topics/age',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:36',
                'updated_at' => '2019-03-11 07:36:36',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'alone',
                'link' => '/topics/alone',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:36',
                'updated_at' => '2019-03-11 07:36:36',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'amazing',
                'link' => '/topics/amazing',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:37',
                'updated_at' => '2019-03-11 07:36:37',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'anger',
                'link' => '/topics/anger',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:37',
                'updated_at' => '2019-03-11 07:36:37',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'anniversary',
                'link' => '/topics/anniversary',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:37',
                'updated_at' => '2019-03-11 07:36:37',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'architecture',
                'link' => '/topics/architecture',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:37',
                'updated_at' => '2019-03-11 07:36:37',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'art',
                'link' => '/topics/art',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:37',
                'updated_at' => '2019-03-11 07:36:37',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'attitude',
                'link' => '/topics/attitude',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:38',
                'updated_at' => '2019-03-11 07:36:38',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'beauty',
                'link' => '/topics/beauty',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:38',
                'updated_at' => '2019-03-11 07:36:38',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'best',
                'link' => '/topics/best',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:38',
                'updated_at' => '2019-03-11 07:36:38',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'birthday',
                'link' => '/topics/birthday',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:38',
                'updated_at' => '2019-03-11 07:36:38',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'brainy',
                'link' => '/topics/brainy',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:38',
                'updated_at' => '2019-03-11 07:36:38',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'business',
                'link' => '/topics/business',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:38',
                'updated_at' => '2019-03-11 07:36:38',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'car',
                'link' => '/topics/car',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:39',
                'updated_at' => '2019-03-11 07:36:39',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'chance',
                'link' => '/topics/chance',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:39',
                'updated_at' => '2019-03-11 07:36:39',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'change',
                'link' => '/topics/change',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:39',
                'updated_at' => '2019-03-11 07:36:39',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'christmas',
                'link' => '/topics/christmas',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:39',
                'updated_at' => '2019-03-11 07:36:39',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'communication',
                'link' => '/topics/communication',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:39',
                'updated_at' => '2019-03-11 07:36:39',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'computers',
                'link' => '/topics/computers',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:39',
                'updated_at' => '2019-03-11 07:36:39',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'cool',
                'link' => '/topics/cool',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:39',
                'updated_at' => '2019-03-11 07:36:39',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'courage',
                'link' => '/topics/courage',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:40',
                'updated_at' => '2019-03-11 07:36:40',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'dad',
                'link' => '/topics/dad',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:40',
                'updated_at' => '2019-03-11 07:36:40',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'dating',
                'link' => '/topics/dating',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:40',
                'updated_at' => '2019-03-11 07:36:40',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'death',
                'link' => '/topics/death',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:40',
                'updated_at' => '2019-03-11 07:36:40',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'design',
                'link' => '/topics/design',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:40',
                'updated_at' => '2019-03-11 07:36:40',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'diet',
                'link' => '/topics/diet',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:41',
                'updated_at' => '2019-03-11 07:36:41',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'dreams',
                'link' => '/topics/dreams',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:41',
                'updated_at' => '2019-03-11 07:36:41',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'easter',
                'link' => '/topics/easter',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:41',
                'updated_at' => '2019-03-11 07:36:41',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'education',
                'link' => '/topics/education',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:41',
                'updated_at' => '2019-03-11 07:36:41',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'environmental',
                'link' => '/topics/environmental',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:41',
                'updated_at' => '2019-03-11 07:36:41',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'equality',
                'link' => '/topics/equality',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:41',
                'updated_at' => '2019-03-11 07:36:41',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'experience',
                'link' => '/topics/experience',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:41',
                'updated_at' => '2019-03-11 07:36:41',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'failure',
                'link' => '/topics/failure',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:41',
                'updated_at' => '2019-03-11 07:36:41',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'faith',
                'link' => '/topics/faith',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:42',
                'updated_at' => '2019-03-11 07:36:42',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'family',
                'link' => '/topics/family',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:42',
                'updated_at' => '2019-03-11 07:36:42',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'famous',
                'link' => '/topics/famous',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:42',
                'updated_at' => '2019-03-11 07:36:42',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'father\'s day',
                'link' => '/topics/fathersday',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:42',
                'updated_at' => '2019-03-11 07:36:42',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'fear',
                'link' => '/topics/fear',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:42',
                'updated_at' => '2019-03-11 07:36:42',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'finance',
                'link' => '/topics/finance',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:42',
                'updated_at' => '2019-03-11 07:36:42',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'fitness',
                'link' => '/topics/fitness',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:43',
                'updated_at' => '2019-03-11 07:36:43',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'food',
                'link' => '/topics/food',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:43',
                'updated_at' => '2019-03-11 07:36:43',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'forgiveness',
                'link' => '/topics/forgiveness',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:43',
                'updated_at' => '2019-03-11 07:36:43',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'freedom',
                'link' => '/topics/freedom',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:43',
                'updated_at' => '2019-03-11 07:36:43',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'friendship',
                'link' => '/topics/friendship',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:43',
                'updated_at' => '2019-03-11 07:36:43',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'funny',
                'link' => '/topics/funny',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:43',
                'updated_at' => '2019-03-11 07:36:43',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'future',
                'link' => '/topics/future',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:43',
                'updated_at' => '2019-03-11 07:36:43',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'gardening',
                'link' => '/topics/gardening',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:44',
                'updated_at' => '2019-03-11 07:36:44',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'god',
                'link' => '/topics/god',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:44',
                'updated_at' => '2019-03-11 07:36:44',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'good',
                'link' => '/topics/good',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:44',
                'updated_at' => '2019-03-11 07:36:44',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'government',
                'link' => '/topics/government',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:44',
                'updated_at' => '2019-03-11 07:36:44',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'graduation',
                'link' => '/topics/graduation',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:44',
                'updated_at' => '2019-03-11 07:36:44',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'great',
                'link' => '/topics/great',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:44',
                'updated_at' => '2019-03-11 07:36:44',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'happiness',
                'link' => '/topics/happiness',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:45',
                'updated_at' => '2019-03-11 07:36:45',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'health',
                'link' => '/topics/health',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:45',
                'updated_at' => '2019-03-11 07:36:45',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'history',
                'link' => '/topics/history',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:45',
                'updated_at' => '2019-03-11 07:36:45',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'home',
                'link' => '/topics/home',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:45',
                'updated_at' => '2019-03-11 07:36:45',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'hope',
                'link' => '/topics/hope',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:45',
                'updated_at' => '2019-03-11 07:36:45',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'humor',
                'link' => '/topics/humor',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:45',
                'updated_at' => '2019-03-11 07:36:45',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'imagination',
                'link' => '/topics/imagination',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:45',
                'updated_at' => '2019-03-11 07:36:45',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'independence',
                'link' => '/topics/independence',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:46',
                'updated_at' => '2019-03-11 07:36:46',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'inspirational',
                'link' => '/topics/inspirational',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:46',
                'updated_at' => '2019-03-11 07:36:46',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'intelligence',
                'link' => '/topics/intelligence',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:46',
                'updated_at' => '2019-03-11 07:36:46',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'jealousy',
                'link' => '/topics/jealousy',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:46',
                'updated_at' => '2019-03-11 07:36:46',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'knowledge',
                'link' => '/topics/knowledge',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:47',
                'updated_at' => '2019-03-11 07:36:47',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'leadership',
                'link' => '/topics/leadership',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:47',
                'updated_at' => '2019-03-11 07:36:47',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'learning',
                'link' => '/topics/learning',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:47',
                'updated_at' => '2019-03-11 07:36:47',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'legal',
                'link' => '/topics/legal',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:48',
                'updated_at' => '2019-03-11 07:36:48',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'life',
                'link' => '/topics/life',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:48',
                'updated_at' => '2019-03-11 07:36:48',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'love',
                'link' => '/topics/love',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:49',
                'updated_at' => '2019-03-11 07:36:49',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'marriage',
                'link' => '/topics/marriage',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:49',
                'updated_at' => '2019-03-11 07:36:49',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'medical',
                'link' => '/topics/medical',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:49',
                'updated_at' => '2019-03-11 07:36:49',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'memorial day',
                'link' => '/topics/memorialday',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:50',
                'updated_at' => '2019-03-11 07:36:50',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'men',
                'link' => '/topics/men',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:50',
                'updated_at' => '2019-03-11 07:36:50',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'mom',
                'link' => '/topics/mom',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:50',
                'updated_at' => '2019-03-11 07:36:50',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'money',
                'link' => '/topics/money',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:50',
                'updated_at' => '2019-03-11 07:36:50',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'morning',
                'link' => '/topics/morning',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:51',
                'updated_at' => '2019-03-11 07:36:51',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'mother\'s day',
                'link' => '/topics/mothersday',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:51',
                'updated_at' => '2019-03-11 07:36:51',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'motivational',
                'link' => '/topics/motivational',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:51',
                'updated_at' => '2019-03-11 07:36:51',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'movies',
                'link' => '/topics/movies',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:51',
                'updated_at' => '2019-03-11 07:36:51',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'moving on',
                'link' => '/topics/movingon',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:51',
                'updated_at' => '2019-03-11 07:36:51',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'music',
                'link' => '/topics/music',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:51',
                'updated_at' => '2019-03-11 07:36:51',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'nature',
                'link' => '/topics/nature',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:52',
                'updated_at' => '2019-03-11 07:36:52',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'new year\'s',
                'link' => '/topics/newyears',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:52',
                'updated_at' => '2019-03-11 07:36:52',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'parenting',
                'link' => '/topics/parenting',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:52',
                'updated_at' => '2019-03-11 07:36:52',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'patience',
                'link' => '/topics/patience',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:52',
                'updated_at' => '2019-03-11 07:36:52',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'patriotism',
                'link' => '/topics/patriotism',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:52',
                'updated_at' => '2019-03-11 07:36:52',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'peace',
                'link' => '/topics/peace',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:53',
                'updated_at' => '2019-03-11 07:36:53',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'pet',
                'link' => '/topics/pet',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:53',
                'updated_at' => '2019-03-11 07:36:53',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'poetry',
                'link' => '/topics/poetry',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:53',
                'updated_at' => '2019-03-11 07:36:53',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'politics',
                'link' => '/topics/politics',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:53',
                'updated_at' => '2019-03-11 07:36:53',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'positive',
                'link' => '/topics/positive',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:53',
                'updated_at' => '2019-03-11 07:36:53',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'power',
                'link' => '/topics/power',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:53',
                'updated_at' => '2019-03-11 07:36:53',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'relationship',
                'link' => '/topics/relationship',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:53',
                'updated_at' => '2019-03-11 07:36:53',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'religion',
                'link' => '/topics/religion',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:54',
                'updated_at' => '2019-03-11 07:36:54',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'respect',
                'link' => '/topics/respect',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:54',
                'updated_at' => '2019-03-11 07:36:54',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'romantic',
                'link' => '/topics/romantic',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:54',
                'updated_at' => '2019-03-11 07:36:54',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'sad',
                'link' => '/topics/sad',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:54',
                'updated_at' => '2019-03-11 07:36:54',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'saint patrick\'s day',
                'link' => '/topics/saintpatricksday',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:54',
                'updated_at' => '2019-03-11 07:36:54',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'science',
                'link' => '/topics/science',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:55',
                'updated_at' => '2019-03-11 07:36:55',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'smile',
                'link' => '/topics/smile',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:55',
                'updated_at' => '2019-03-11 07:36:55',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'society',
                'link' => '/topics/society',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:55',
                'updated_at' => '2019-03-11 07:36:55',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'space',
                'link' => '/topics/space',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:55',
                'updated_at' => '2019-03-11 07:36:55',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'sports',
                'link' => '/topics/sports',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:55',
                'updated_at' => '2019-03-11 07:36:55',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'strength',
                'link' => '/topics/strength',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:55',
                'updated_at' => '2019-03-11 07:36:55',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'success',
                'link' => '/topics/success',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:56',
                'updated_at' => '2019-03-11 07:36:56',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'sympathy',
                'link' => '/topics/sympathy',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:56',
                'updated_at' => '2019-03-11 07:36:56',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'teacher',
                'link' => '/topics/teacher',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:56',
                'updated_at' => '2019-03-11 07:36:56',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'technology',
                'link' => '/topics/technology',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:56',
                'updated_at' => '2019-03-11 07:36:56',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'teen',
                'link' => '/topics/teen',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:56',
                'updated_at' => '2019-03-11 07:36:56',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'thankful',
                'link' => '/topics/thankful',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:57',
                'updated_at' => '2019-03-11 07:36:57',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'thanksgiving',
                'link' => '/topics/thanksgiving',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:57',
                'updated_at' => '2019-03-11 07:36:57',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'time',
                'link' => '/topics/time',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:57',
                'updated_at' => '2019-03-11 07:36:57',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'travel',
                'link' => '/topics/travel',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:57',
                'updated_at' => '2019-03-11 07:36:57',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'trust',
                'link' => '/topics/trust',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:57',
                'updated_at' => '2019-03-11 07:36:57',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'truth',
                'link' => '/topics/truth',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:58',
                'updated_at' => '2019-03-11 07:36:58',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'valentine\'s day',
                'link' => '/topics/valentinesday',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:58',
                'updated_at' => '2019-03-11 07:36:58',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'veterans day',
                'link' => '/topics/veteransday',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:58',
                'updated_at' => '2019-03-11 07:36:58',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'war',
                'link' => '/topics/war',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:58',
                'updated_at' => '2019-03-11 07:36:58',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'wedding',
                'link' => '/topics/wedding',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:58',
                'updated_at' => '2019-03-11 07:36:58',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'wisdom',
                'link' => '/topics/wisdom',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:58',
                'updated_at' => '2019-03-11 07:36:58',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'women',
                'link' => '/topics/women',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:59',
                'updated_at' => '2019-03-11 07:36:59',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'work',
                'link' => '/topics/work',
                'source' => 'brainyquote.com',
                'isActive' => 1,
                'created_at' => '2019-03-11 07:36:59',
                'updated_at' => '2019-03-11 07:36:59',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'day',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:34:36',
                'updated_at' => '2019-03-11 12:34:36',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'live',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:42',
                'updated_at' => '2019-03-11 12:41:42',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'you',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:42',
                'updated_at' => '2019-03-11 12:41:42',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'never',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:43',
                'updated_at' => '2019-03-11 12:41:43',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'me',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:44',
                'updated_at' => '2019-03-11 12:41:44',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'think',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:44',
                'updated_at' => '2019-03-11 12:41:44',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'believe',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:45',
                'updated_at' => '2019-03-11 12:41:45',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'words',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:46',
                'updated_at' => '2019-03-11 12:41:46',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'lunch',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:46',
                'updated_at' => '2019-03-11 12:41:46',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'fun',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:47',
                'updated_at' => '2019-03-11 12:41:47',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'long',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:47',
                'updated_at' => '2019-03-11 12:41:47',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'short',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:47',
                'updated_at' => '2019-03-11 12:41:47',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'someone',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:48',
                'updated_at' => '2019-03-11 12:41:48',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'waiting',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:49',
                'updated_at' => '2019-03-11 12:41:49',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'forest',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:49',
                'updated_at' => '2019-03-11 12:41:49',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'sometimes',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:49',
                'updated_at' => '2019-03-11 12:41:49',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'flowers',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:51',
                'updated_at' => '2019-03-11 12:41:51',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'know',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:51',
                'updated_at' => '2019-03-11 12:41:51',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'get',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:51',
                'updated_at' => '2019-03-11 12:41:51',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'them',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:52',
                'updated_at' => '2019-03-11 12:41:52',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'up',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:53',
                'updated_at' => '2019-03-11 12:41:53',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'organizing',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:54',
                'updated_at' => '2019-03-11 12:41:54',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'something',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:54',
                'updated_at' => '2019-03-11 12:41:54',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'welcome',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:55',
                'updated_at' => '2019-03-11 12:41:55',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'gift',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:56',
                'updated_at' => '2019-03-11 12:41:56',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'view',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:56',
                'updated_at' => '2019-03-11 12:41:56',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'laughter',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:56',
                'updated_at' => '2019-03-11 12:41:56',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'envy',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:57',
                'updated_at' => '2019-03-11 12:41:57',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'three',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:58',
                'updated_at' => '2019-03-11 12:41:58',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'uneducated',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:58',
                'updated_at' => '2019-03-11 12:41:58',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'just',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:41:59',
                'updated_at' => '2019-03-11 12:41:59',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'value',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:00',
                'updated_at' => '2019-03-11 12:42:00',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'listening',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:00',
                'updated_at' => '2019-03-11 12:42:00',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'underestimate',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:01',
                'updated_at' => '2019-03-11 12:42:01',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'man',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:02',
                'updated_at' => '2019-03-11 12:42:02',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'own',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:02',
                'updated_at' => '2019-03-11 12:42:02',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'mankind',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:02',
                'updated_at' => '2019-03-11 12:42:02',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'then',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:03',
                'updated_at' => '2019-03-11 12:42:03',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'better',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:04',
                'updated_at' => '2019-03-11 12:42:04',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'say',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:05',
                'updated_at' => '2019-03-11 12:42:05',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'will',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:05',
                'updated_at' => '2019-03-11 12:42:05',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'watch',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:06',
                'updated_at' => '2019-03-11 12:42:06',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'instead',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:06',
                'updated_at' => '2019-03-11 12:42:06',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'start',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:08',
                'updated_at' => '2019-03-11 12:42:08',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'forget',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:08',
                'updated_at' => '2019-03-11 12:42:08',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'stop',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:08',
                'updated_at' => '2019-03-11 12:42:08',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'again',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:09',
                'updated_at' => '2019-03-11 12:42:09',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'need',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:10',
                'updated_at' => '2019-03-11 12:42:10',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'two',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:11',
                'updated_at' => '2019-03-11 12:42:11',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'who',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:11',
                'updated_at' => '2019-03-11 12:42:11',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'divided',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:11',
                'updated_at' => '2019-03-11 12:42:11',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'subject',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:11',
                'updated_at' => '2019-03-11 12:42:11',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'wrong',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:13',
                'updated_at' => '2019-03-11 12:42:13',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'places',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:13',
                'updated_at' => '2019-03-11 12:42:13',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'letters',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:13',
                'updated_at' => '2019-03-11 12:42:13',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'children',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:14',
                'updated_at' => '2019-03-11 12:42:14',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'writing',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:15',
                'updated_at' => '2019-03-11 12:42:15',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'escape',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:15',
                'updated_at' => '2019-03-11 12:42:15',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'always',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:15',
                'updated_at' => '2019-03-11 12:42:15',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'books',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:16',
                'updated_at' => '2019-03-11 12:42:16',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'thought',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:17',
                'updated_at' => '2019-03-11 12:42:17',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'never forget',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:17',
                'updated_at' => '2019-03-11 12:42:17',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'being',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:18',
                'updated_at' => '2019-03-11 12:42:18',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'exciting',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:19',
                'updated_at' => '2019-03-11 12:42:19',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'making',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:19',
                'updated_at' => '2019-03-11 12:42:19',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'advantages',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:19',
                'updated_at' => '2019-03-11 12:42:19',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'pretty',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:21',
                'updated_at' => '2019-03-11 12:42:21',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'he',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:21',
                'updated_at' => '2019-03-11 12:42:21',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'decent',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:21',
                'updated_at' => '2019-03-11 12:42:21',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'potatoes',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:21',
                'updated_at' => '2019-03-11 12:42:21',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'likes',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:22',
                'updated_at' => '2019-03-11 12:42:22',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'book',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:23',
                'updated_at' => '2019-03-11 12:42:23',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'golf',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:23',
                'updated_at' => '2019-03-11 12:42:23',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'cinema',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:23',
                'updated_at' => '2019-03-11 12:42:23',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'old',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:24',
                'updated_at' => '2019-03-11 12:42:24',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'mind',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:25',
                'updated_at' => '2019-03-11 12:42:25',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'happy',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:25',
                'updated_at' => '2019-03-11 12:42:25',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'thinking',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:25',
                'updated_at' => '2019-03-11 12:42:25',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'only',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:26',
                'updated_at' => '2019-03-11 12:42:26',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'minority',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:26',
                'updated_at' => '2019-03-11 12:42:26',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'wind',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:27',
                'updated_at' => '2019-03-11 12:42:27',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'treasure',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:28',
                'updated_at' => '2019-03-11 12:42:28',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'island',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:28',
                'updated_at' => '2019-03-11 12:42:28',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'fame',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:29',
                'updated_at' => '2019-03-11 12:42:29',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'almost',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:30',
                'updated_at' => '2019-03-11 12:42:30',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'honey',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:30',
                'updated_at' => '2019-03-11 12:42:30',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'like',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:31',
                'updated_at' => '2019-03-11 12:42:31',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'world',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:32',
                'updated_at' => '2019-03-11 12:42:32',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'name',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:32',
                'updated_at' => '2019-03-11 12:42:32',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'doing',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:33',
                'updated_at' => '2019-03-11 12:42:33',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'forever',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:33',
                'updated_at' => '2019-03-11 12:42:33',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'people',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:34',
                'updated_at' => '2019-03-11 12:42:34',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'care',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:35',
                'updated_at' => '2019-03-11 12:42:35',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'some people',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:35',
                'updated_at' => '2019-03-11 12:42:35',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'i am',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:36',
                'updated_at' => '2019-03-11 12:42:36',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'first',
                'link' => NULL,
                'source' => NULL,
                'isActive' => 1,
                'created_at' => '2019-03-11 12:42:36',
                'updated_at' => '2019-03-11 12:42:36',
            ),
        ));
        
        
    }
}