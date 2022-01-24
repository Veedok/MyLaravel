<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function GuzzleHttp\json_decode;

class NotCoocieTest extends TestCase
{

    public $data = [
        'form2' => 1,
        'name' => 'sgfsdf',
        'tel' => '12123123',
    ];
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_json()
    {
        $this->withoutMiddleware();

        $response = $this->post('/admin/myAdmin',$this->data);

        $response->assertJson($this->data);


        // $response->ddHeaders();

        // $response->ddSession();

        // $response->dd();
    }
    public function test_coocieMissing (){
        $randomCoocie = "My Coocie";
        $response = $this->get('/admin/myAdmin');
        $response->assertCookieMissing($randomCoocie);
    }
    public function test_SessionMissing(){
        $response = $this->get('/admin/myAdmin');
        $randomKey = '2212312312';
        $response->assertSessionMissing($randomKey);
    }

    public function test_JsonLength () {
        $this->withoutMiddleware();
        $response = $this->post('/admin/myAdmin',$this->data);
        $response->assertJsonCount(3, $key = null);

    }
    public function test_JsonFragment() {
        $this->withoutMiddleware();
        $response = $this->post('/admin/myAdmin',$this->data);
        $response->assertJsonFragment(['tel' => '12123123']);
    }
    public function test_notFound () {
        $response = $this->get('/random/route');
        $response->assertNotFound();
    }
    public function test_SessionOk (){
        $response = $this->get('/categoryNews');
        $response->assertSessionHasNoErrors();
    }
    public function test_Valid(){
        $response = $this->get('/categoryNews');
        $response->assertValid();
    }
    public function test_ViewMissing() {
        $randomKey = '2212312312';
        $response = $this->get('/categoryNews');
        $response->assertViewMissing($randomKey);

    }
}
