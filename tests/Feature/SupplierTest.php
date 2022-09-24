<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Supplier;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SupplierTest extends TestCase
{
    use RefreshDatabase;
    private $user;
    private $supplier;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    // public function setUp(): void
    // {
    //     parent::setUp();
    //     $user = User::factory()->create([
    //         'level' => 'admin'
    //     ]);
    //     $this->supplier = Supplier::factory()->create();
    // }


    public function test_open_supplier_page()
    {
        //ngetes data supplier
        //harus ada user
        //login emai, password
        //buka halaman supplier

        $user = User::factory()->create([
            'level' => 'admin'
        ]);

            $response = $this->actingAs($user)
            ->withSession(['banned' => false])
            ->get('/dataSupplier');

            // $response->assertSee('Nama');
            $response->assertStatus(200); // Halaman berhasil di load
          
    }

    public function test_create_supplier()
    {
        $this->supplier = Supplier::factory()->create();
        $response = $this->actingAs($user)->post('/dataSupplier', [
            'nama' => 'Pokoro',
            'alamat' => 'Malang Kota',
            'telp' => '09775843'
        ]);
        $response->assertStatus(302);
        $this->assertDatabaseHas('suppliers', [
            'nama' => 'Pokoro',
            'alamat' => 'Malang Kota',
            'telp' => '09775843'
        ]);

        $response = $this->followingRedirects()->actingAs($user)->get('/dataSupplier');
        $response->assertSee('Supplier berhasil ditambahkan');
    }
}
