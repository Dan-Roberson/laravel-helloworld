<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Http\Response;

class FordTest extends TestCase
{
    public function testShowTruckModel()
    {
        $testModel = "bananas";
        $response = $this->call('GET', '/Ford/truck?model=F250');
        //$response = $this->action('GET', 'Ford@show', ['model' => $testModel]);
        $this->assertEquals($testModel, $response->getContent());
    }
}

?>
