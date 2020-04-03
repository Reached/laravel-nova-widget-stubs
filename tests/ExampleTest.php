<?php

namespace Reached\LaravelNovaWidgetStubs\Tests;

use Orchestra\Testbench\TestCase;
use Reached\LaravelNovaWidgetStubs\LaravelNovaWidgetStubsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelNovaWidgetStubsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
