<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Project::class)
            ->assertStatus(200);
    }
}
