<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RouteTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    //    protected $signature = 'app:route-table';  code cu duoi la code moi sua 
      protected $signature = 'route:table';  // moi them 22/04/2026 cua bai 7 tu code sang dang bang 

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // chuyen thanh bang (22/04/2026)
        $this->table(
            ['Domain', 'Method', 'URI', 'Name', 'Action', 'Middleware'],
            collect(\Route::getRoutes())->map(function ($route) {
                return [
                    $route->getDomain() ?? '-',
                    implode('|', $route->methods()),
                    $route->uri(),
                    $route->getName() ?? '-',
                    $route->getActionName(),
                    implode(',', $route->middleware()),
                ];
            })->toArray()
        );
    }
}
