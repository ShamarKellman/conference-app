<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Faker\Factory as Faker;
use App\Models\Attendee;

class AttendeesModelTest extends TestCase
{
	use RefreshDatabase;

    /**
     * create attendee.
     *
     * @return void
     */
    public function testCreateAttendee()
    {
        $attendee = factory(Attendee::class)->create();

        $this->assertDatabaseHas('attendees', $attendee->toArray());
    }

    /**
     * update attendee.
     *
     * @return void
     */
    public function testUpdateAttendee()
    {
        $attendee = factory(Attendee::class)->create();

        $faker = Faker::create();
        $updatedAttendee = Attendee::all()->first();
        $updatedAttendee->name = $faker->name;
        $updatedAttendee->password = $faker->password;

        $updatedAttendee->save();

        $this->assertDatabaseHas('attendees', $updatedAttendee->toArray());
    }

    /**
     * delete attendee.
     *
     * @return void
     */
    public function testDeleteAttendee()
    {
        $attendee = factory(Attendee::class)->create();

        Attendee::destroy($attendee->id);

        $this->assertDatabaseMissing('attendees', $attendee->toArray());
    }
}
