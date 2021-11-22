<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create(
            [
              'email'=>'contact@skillshub.com',
              'phone'=>'0599547222',
              'facebook'=>'www.facebook.com',
              'twitter'=>'www.twitter.com',
              'instagram'=>'www.instagram.com',
              'youtube'=>'www.youtube.com',
              'linkedin'=>'www.linkedin.com'

            ]
        );
        //
    }
}
