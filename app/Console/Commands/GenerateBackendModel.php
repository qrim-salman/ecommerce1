<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateBackendModel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate-model:backend {table}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'For generate backend model';

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
        try {
            $table     = $this->argument('table');
            $folder    = "app/Models/Backend";
            $namespace = "App/Models/Backend";

            \Artisan::call('generate:modelfromtable', [
                '--table'     => $table,
                '--namespace' => $namespace,
                '--folder'    => $folder,
            ]);

            $this->line('model has been generated.');
        } catch(\Exception $e){
            $this->line($e->getMessage());
        }
    }
}
