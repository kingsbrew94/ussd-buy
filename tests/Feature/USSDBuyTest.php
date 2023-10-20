<?php

namespace Tests\Feature;

use Tests\TestCase;

class USSDBuyTest extends TestCase
{
    /**
     * Feature test for check status api
     */
    public function test_check_status(): void
    {
        $number = "0200000000";
        $response = $this->getJson(route('status.check')."?phoneNumber={$number}");
        $data = $response->json();
        $response->assertStatus(200);
        $this->assertEquals(1, $data['statusCode']);
        $this->assertEquals($number, $data['number']);
        $this->assertTrue(is_string($data['message']));
    }

    /**
     * Feature test for error check status api
     */
    public function test_error_check_status(): void
    {
        $response = $this->getJson(route('status.check'));
        $data = $response->json();
        $this->assertEquals(1, $data['statusCode']);
        $this->assertNull($data["number"]);
        $this->assertTrue(is_string($data['message']));
    }
}