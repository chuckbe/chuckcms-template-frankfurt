<?php

namespace Chuckbe\ChuckcmsTemplateFrankfurt\seeds;

use Chuckbe\Chuckcms\Models\Template;
use Illuminate\Database\Seeder;

class ChuckcmsTemplateFrankfurtTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// php artisan db:seed --class=Chuckbe\\ChuckcmsTemplateFrankfurt\\seeds\\ChuckcmsTemplateFrankfurtTableSeeder
        $fonts = [];
        $fonts['raw'] = 'Roboto:100,300,400,400italic,700|Patua+One:100,300,400,400italic,700|Lato:400,400italic,700,700italic,900|Roboto:100,300,400,400italic,500,700,700italic|Montserrat:100,300,400,400italic,500,700,700italic';
        
        $css = [];
        $css['global']['href'] = 'chuckbe/chuckcms-template-frankfurt/css/global.css';
        $css['global']['asset'] = 'true';

        $css['structure']['href'] = 'chuckbe/chuckcms-template-frankfurt/css/structure.css';
        $css['structure']['asset'] = 'true';

        $css['frankfurt']['href'] = 'chuckbe/chuckcms-template-frankfurt/css/frankfurt.css';
        $css['frankfurt']['asset'] = 'true';

        $css['custom']['href'] = 'chuckbe/chuckcms-template-frankfurt/css/custom.css';
        $css['custom']['asset'] = 'true';
        
        $js = []; 
        $js['jquery']['href'] = 'chuckbe/chuckcms-template-frankfurt/js/jquery-2.1.4.min.js';
        $js['jquery']['asset'] = 'true';

        $js['mfnmenu']['href'] = 'chuckbe/chuckcms-template-frankfurt/js/mfn.menu.js';
        $js['mfnmenu']['asset'] = 'true';

        $js['jqueryplugins']['href'] = 'chuckbe/chuckcms-template-frankfurt/js/jquery.plugins.js';
        $js['jqueryplugins']['asset'] = 'true';

        $js['jqueryjplayer']['href'] = 'chuckbe/chuckcms-template-frankfurt/js/jquery.jplayer.min.js';
        $js['jqueryjplayer']['asset'] = 'true';

        $js['animations']['href'] = 'chuckbe/chuckcms-template-frankfurt/js/animations/animations.js';
        $js['animations']['asset'] = 'true';

        $js['translate3d']['href'] = 'chuckbe/chuckcms-template-frankfurt/js/translate3d.js';
        $js['translate3d']['asset'] = 'true';

        $js['scripts']['href'] = 'chuckbe/chuckcms-template-frankfurt/js/scripts.js';
        $js['scripts']['asset'] = 'true';

        $js['email']['href'] = 'chuckbe/chuckcms-template-frankfurt/js/email.js';
        $js['email']['asset'] = 'true';

        $json = [];

        // create template
        Template::updateOrCreate(
            ['slug' => 'chuckcms-template-frankfurt'],
            ['name' => 'ChuckCMS Template Frankfurt',
            'hintpath' => 'chuckcms-template-frankfurt',
            'path' => 'chuckbe/chuckcms-template-frankfurt',
            'type' => 'default',
            'version' => '0.1',
            'author' => 'Karel Brijs (karel@chuck.be)',
            'fonts' => $fonts,
            'css' => $css,
            'js' => $js,
            'json' => $json,
            'active' => 1]
        );
    }
}
