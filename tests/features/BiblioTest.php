<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Biblio;
use App\User;

class BiblioTest extends \Tests\BrowserKitTestCase 
{

    use DatabaseMigrations;
    use DatabaseTransactions;

    public function testBiblioHasAName()
    {
        $biblio = factory(Biblio::class)
                    ->create(['name' => 'Biblioteca Geral']);

        $this->assertEquals('Biblioteca Geral', $biblio->name);

    }

    public function testBiblioChangeName()
    {
        $biblio = factory(Biblio::class)
                    ->create(['name' => 'Biblioteca Geral']);

        $biblio->name = 'Biblioteca';

        $this->assertEquals('Biblioteca', $biblio->name);

    }


    public function testViewListOfBiblios()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        factory(Biblio::class)
            ->create(['name' => 'Biblioteca Geral']);

        factory(Biblio::class)
            ->create(['name' => 'Biblioteca Universitária']);

        $this->visit('admin/biblios')
             ->see('Biblioteca Geral')
             ->see('Biblioteca Universitária');

    }

    public function testViewOneBiblio()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $biblio = factory(Biblio::class)
                    ->create(['name' => 'Biblioteca Geral']);

        $this->visit('admin/biblios/1')
             ->see('Biblioteca Geral');
    }

    public function testCreateNewBiblio()
    {
        $admin = factory(User::class)->create(['id' => 1]);

        $this->be($admin);

        $this->visit('admin/biblios/create')
                ->type('Biblioteca Geral', 'name')
                ->press('Create')
                ->seePageIs('admin/biblios')
                ->see('Biblio added with success');
    }

    public function testEditBiblioFromSingleBiblioView()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $biblio = factory(Biblio::class)
                    ->create(['name' => 'Biblioteca Geral']);

        $this->visit('admin/biblios/1')
             ->see('Biblioteca Geral')
             ->click('edit_1')
             ->seePageIs('admin/biblios/1/edit')
             ->type('Biblioteca Universitária', 'name')
             ->press('Edit')
             ->seePageIs('admin/biblios')
             ->see('Biblio edited with success')
             ->see('Biblioteca Universitária');
    }

    public function testEditBiblioFromListBiblioView()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $biblio = factory(Biblio::class)
                    ->create(['name' => 'Biblioteca Geral']);

        $biblio = factory(Biblio::class)
                    ->create(['name' => 'Biblioteca Universitária']);

        $this->visit('admin/biblios')
             ->see('Biblioteca Geral')
             ->click('edit_1')
             ->seePageIs('admin/biblios/1/edit')
             ->type('Biblioteca Geral 2', 'name')
             ->press('Edit')
             ->seePageIs('admin/biblios')
             ->see('Biblio edited with success')
             ->see('Biblioteca Geral 2');
    }

    public function testDeleteBiblioFromSingleBiblioView()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $biblio = factory(Biblio::class)
                    ->create(['name' => 'Biblioteca Geral']);

        $this->visit('admin/biblios/1')
             ->see('Biblioteca Geral')
             ->press('delete_1')
             ->seePageIs('admin/biblios')
             ->dontSee('Biblioteca Geral');
    }

    public function testDeleteBiblioFromListBiblioView()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $biblio = factory(Biblio::class)
                    ->create(['name' => 'Biblioteca Geral']);

        $this->visit('admin/biblios')
             ->see('Biblioteca Geral')
             ->press('delete_1')
             ->seePageIs('admin/biblios')
             ->dontSee('Biblioteca Geral');
    }

}
