<?php

namespace Tests\Unit\BackOffice\Setting\General;

use DurianSoftware\Models\General;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpate()
    {
        $data = factory(general::class, 1)->make()->first()->toArray();
        $general = general::withTrashed()->first();
        $general->update($data);
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
