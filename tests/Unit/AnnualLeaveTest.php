<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;

use Tests\TestCase;

class AnnualLeaveTest extends TestCase
{
    
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    
    public function testPOST()
    {
        $data = [
            'user_id' => 1,
            'tanggal_cuti' => '2023-03-03',
            'jumlah_hari' => 3,
            'keterangan' => 'pulang kampung'
        ];

        $response = $this->json('POST', '/annual-leaves', $data);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
            'message' => 'Data submitted successfully',
        ]);
    }
}
