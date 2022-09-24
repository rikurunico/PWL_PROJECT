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
        $user = User::factory()->create([
            'level' => 'admin'
        ]);

        $response = $this->actingAs($user)->post('/postCreateSupplier', [
            'nama' => 'Supplier 1',
            'alamat' => 'Jl. Supplier 1',
            'telp' => '08123456789'
        ]);

        $response = $this->followingRedirects()
            ->actingAs($user)
            ->get('/dataSupplier')
            ->assertStatus(200);
    }
    
    public function test_read_suplier()
    {
        $user = User::factory()->create([
            'level' => 'admin'
        ]);

        $supplier = Supplier::factory()->create([
            'nama' => 'Supplier 1',
            'alamat' => 'Jl. Supplier 1',
            'telp' => '08123456789'
        ]);

        $response = $this->actingAs($user)
            ->get('/dataSupplier')
            ->assertSee('Supplier 1');
    }
    

    public function test_edit_suplier()
    {
        $user = User::factory()->create([
            'level' => 'admin'
        ]);

        $supplier = Supplier::factory()->create([
            'nama' => 'Supplier 1',
            'alamat' => 'Jl. Supplier 1',
            'telp' => '08123456789'
        ]);

        $response = $this->actingAs($user)->post('/postEditSupplier'.$supplier->id, [
            
            'nama' => 'Supplier 2',
            'alamat' => 'Jl. Supplier 2',
            'telp' => '08123456789'
        ]);

        $response = $this->followingRedirects()
            ->actingAs($user)
            ->get('/dataSupplier')
            ->assertStatus(200);
    }

    public function test_delete_supplier()
    {
        $user = User::factory()->create([
            'level' => 'admin'
        ]);

        $supplier = Supplier::factory()->create([
            'nama' => 'Supplier 1',
            'alamat' => 'Jl. Supplier 1',
            'telp' => '08123456789'
        ]);

        $response = $this->actingAs($user)->post('/postDeleteSupplier'. $supplier->id, [
            'id' => $supplier->id,
        ]);

        $response = $this->followingRedirects()
            ->actingAs($user)
            ->get('/dataSupplier')
            ->assertStatus(200);
    }
}