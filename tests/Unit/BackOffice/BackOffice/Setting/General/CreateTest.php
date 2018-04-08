<?php

namespace Tests\Unit\BackOffice\Setting\General;

use Tests\TestCase;
use DurianSoftware\Models\General;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreate()
    {
        $data = [
            'company_name' => 'company_nameDemo',
            'address'=> 'addressDemo',
            'postcode' => 000001,
            'district' => 'districtDemo',
            'tax_no' => '123456',
            'logo' => '/logo.jpg',
            'background' => '/background.jpg',
            'initial' => 'Ngin',
            'alert_prepo' => '1',
            'alert_initialpo' => '2',
            'alert_postpo' => '3',
            'first_alert' => '3',
            'second_alert' => '3',
            'third_alert' => '3',
            'forth_alert' => '3',
            'username' => 'username' ,
            'password' => 11111111,
            'server' => '127.0.0.1',
            'port' => '8080',
            'type' => 'SSL',
            'facebook' => 'facebook',
            'twitter' => 'twitter',
            'line' => 'line',
            'tel' => '089-9999999',
            'google_analytic' => 'google_analytic'
        ];
        \DB::table('generals')->truncate();
        $general = General::create($data);
        $this->assertEquals($data['company_name'], $general->company_name);
        $this->assertEquals($data['address'], $general->address);
        $this->assertEquals($data['postcode'], $general->postcode);
        $this->assertEquals($data['tax_no'], $general->tax_no);
        $this->assertEquals($data['logo'], $general->logo);
        $this->assertEquals($data['background'], $general->background);
        $this->assertEquals($data['initial'], $general->initial);
        $this->assertEquals($data['alert_prepo'], $general->alert_prepo);
        $this->assertEquals($data['alert_initialpo'], $general->alert_initialpo);
        $this->assertEquals($data['alert_postpo'], $general->alert_postpo);
        $this->assertEquals($data['first_alert'], $general->first_alert);
        $this->assertEquals($data['second_alert'], $general->second_alert);
        $this->assertEquals($data['third_alert'], $general->third_alert);
        $this->assertEquals($data['forth_alert'], $general->forth_alert);
        $this->assertEquals($data['username'], $general->username);
        $this->assertEquals($data['server'], $general->server);
        $this->assertEquals($data['port'], $general->port);
        $this->assertEquals($data['type'], $general->type);
        $this->assertEquals($data['facebook'], $general->facebook);
        $this->assertEquals($data['twitter'], $general->twitter);
        $this->assertEquals($data['line'], $general->line);
        $this->assertEquals($data['tel'], $general->tel);
        $this->assertEquals($data['google_analytic'], $general->google_analytic);
    }
}
