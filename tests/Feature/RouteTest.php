<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_startPage()
    {
        $response = $this->get('/');

        $response->assertOk();
    }
    public function test_NewsPage()
    {
        $response = $this->get('/news');

        $response->assertOk();
    }
    public function test_CatigoryPage()
    {
        $response = $this->get('/categoryNews/1');

        $response->assertOk();
    }
    public function test_SingleNewsPage()
    {
        $response = $this->get('/singleNews/1');

        $response->assertOk();
    }
    public function test_AllCaigoryPage()
    {
        $response = $this->get('/categoryNews');

        $response->assertOk();
    }
    public function test_AdminPage()
    {
        $response = $this->get('/admin/myAdmin');

        $response->assertOk();
    }




}
