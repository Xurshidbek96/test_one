<?php

namespace Tests\Feature;

use Illuminate\Http\Response;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Testing\File;
use Tests\TestCase;

class ImageControllerTest extends TestCase
{
    use DatabaseTransactions;
    /** @test */

    public function store_report()
    {
        $file = File::create('img_13831333097840.jpg', 100);

        $this->post(route('banners.store'), [
            'name' => 'Bek',
            'img' => $file
        ]);

        // $this->assertDatabeseHas('banners', ['name'=>'Bek']);
    }
}
