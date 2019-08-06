<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ActivityTest extends TestCase
{
    /** @test */
    public function test_activity_can_be_added_to_database()
    {
        $this->withoutExceptionHandling();
        
        $response = $this->post('/atividades', [
            "nome" => "Jogo-Treino",
            "tipo" => 1,
        ]);

        $response->assertOk();
        $this->assertCount(1, Atividade::all());
    }
}
