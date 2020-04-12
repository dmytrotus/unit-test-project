<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookReservationTest extends TestCase
{
    /** @test */
    public function a_book_can_be_added_to_the_library()
    {
        $this->withoutExceptionHandling();

        $responce = $this->post([
            'title' => 'First Book',
            'Author' => 'Victor'
        ]);

        $responce->assertOk();

        $this->assertCount(1, Book::all());
    }
}
