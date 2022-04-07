<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class QbImportAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'qb:import-all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call('qb:customer:import');
        $this->call('qb:account:import');
        $this->call('qb:item:import');
        $this->call('qb:payment-method:import');
        $this->call('qb:payment:import');

        return 0;
    }
}
