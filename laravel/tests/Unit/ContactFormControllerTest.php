<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactFormControllerTest extends TestCase
{
  /**
   * A basic test example.
   *
   * @return void
   */
  public function testGetContactForm()
  {
    $ret = $this->post('/contact/confirm', array());
    $ret->assertStatus(200);
    //$this->assertTrue(true);
  }



}
