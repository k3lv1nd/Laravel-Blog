<?php

namespace Tests\Feature;
use Tests\TestCase;
use Session;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLoginPost()
        {
            Session::start();
            $response = $this->call('POST', '/login', [
                'email' => 'kalvind95@gmail.com',
                'password' => '31985695',
                '_token' => csrf_token()
            ]);
            $this->assertEquals(302, $response->getStatusCode());
            //$this->assertEquals('auth.login', $response->original->name());
        }


}
