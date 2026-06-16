<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeServiceCommand extends Command
{
    protected $signature = 'make:service {name}';
    protected $description = 'Create a service class';

    public function handle()
    {
        $name = $this->argument('name');

        $dir = app_path('Services');
        $path = $dir . "/{$name}.php";

        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        if (file_exists($path)) {
            $this->error('Service already exists!');
            return;
        }

        file_put_contents($path, <<<PHP
<?php

namespace App\Services;

class {$name}
{
    //
}
PHP);

        $this->info("Service {$name} created successfully.");
    }
}
