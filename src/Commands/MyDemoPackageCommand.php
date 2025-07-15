<?php

namespace Lucvk\MyDemoPackage\Commands;

use Illuminate\Console\Command;

class MyDemoPackageCommand extends Command
{
    public $signature = 'my-demo-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done now!!');

        return self::SUCCESS;
    }
}
