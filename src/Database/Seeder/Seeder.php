<?php

use Illuminate\Database\Capsule\Manager as Capsule;

abstract class Seeder
{
    public function __construct()
    {
        // no need to instantiate Capsule here
    }

    protected function capsule()
    {
        return Capsule::connection();
    }

    protected function schema()
    {
        return Capsule::schema();
    }

    abstract public function run();

    public function execute()
    {
        echo "Seeding: " . static::class . "\n";
        $this->run();
        echo "Seeded: " . static::class . "\n\n";
    }
}
