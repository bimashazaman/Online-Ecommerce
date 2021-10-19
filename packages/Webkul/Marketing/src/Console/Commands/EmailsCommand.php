<?php

namespace Webkul\Marketing\Console\Commands;

use Illuminate\Console\Command;
use Webkul\Marketing\Helpers\Campaign;

class EmailsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'campaign:process';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process campaigns and send emails to the subscribed customers.';

    /**
     * Campaign object
     *
     * @var \Webkul\Marketing\Helpers\Campaign
     */
    protected $campaignHelper;

    /**
     * Create a new command instance.
     *
     * @param  \Webkul\Marketing\Repositories\Campaign  $campaignHelper
     * @return void
     */
    public function __construct(Campaign $campaignHelper)
    {
        $this->campaignHelper = $campaignHelper;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->campaignHelper->process();
    }
}