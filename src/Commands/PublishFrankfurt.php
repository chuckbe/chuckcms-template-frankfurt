<?php

namespace Chuckbe\ChuckcmsTemplateFrankfurt\Commands;

use Chuckbe\ChuckcmsTemplateFrankfurt\seeds\ChuckcmsTemplateFrankfurtTableSeeder;
use Illuminate\Console\Command;

class PublishFrankfurt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chuckcms-template-frankfurt:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command publishes the Frankfurt template for ChuckCMS.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $seeder = new ChuckcmsTemplateFrankfurtTableSeeder();
        $seeder->run();
        
        $this->info('Just a moment... ChuckCMS is generating your template.');

        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('.... Frankfurt ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('....   NOW   ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info(' ');
        $this->info('ChuckCMS Template Frankfurt published successfully');
        $this->info(' ');
        

        
    }
}
