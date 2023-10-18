<?php

namespace Tests;

use Faker\Factory;
use Faker\Generator;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, DatabaseMigrations;

    private Generator $faker;

    public function setUp(): void {

        parent::setUp();
        $this->faker = Factory::create();
    }
}
