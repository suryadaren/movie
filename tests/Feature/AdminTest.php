<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminTest extends TestCase
{
    public function tesUpload()
    {
    	$response = $this->json('POST', '/admin', [
            'title' => "tes 1",
            'release' => "2019-09-09",
            'image' => "image",
            'director' => "daren",
            'synopsis' => "	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam perspiciatis eum impedit officiis possimus amet beatae aperiam doloribus harum voluptates ut, itaque, quod sunt consequuntur, nisi, deleniti voluptatum sint exercitationem!"
        ]);
    }
}
