<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Itemtype;
use App\User;
use App\Marcfield;

class ItemtypeTest extends \Tests\BrowserKitTestCase  
{

    use DatabaseMigrations;
    use DatabaseTransactions;

    public function testItemtypeHasAName()
    {

        $itemtype = factory(Itemtype::class)
                    ->create(['name' => 'Livro']);

        $this->assertEquals('Livro', $itemtype->name);

    }

    public function testItemtypeChangeName()
    {
        $itemtype = factory(Itemtype::class)
                    ->create(['name' => 'Livro']);

        $itemtype->name = 'Artigo';

        $this->assertEquals('Artigo', $itemtype->name);

    }


    public function testViewListOfItemtypes()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        factory(Itemtype::class)
            ->create(['name' => 'Livro']);

        factory(Itemtype::class)
            ->create(['name' => 'Artigo']);

        $this->visit('admin/itemtypes')
             ->seePageIs('admin/itemtypes')
             ->see('Livro')
             ->see('Artigo');

    }

    public function testViewOneItemtype()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $itemtype = factory(Itemtype::class)
                    ->create(['name' => 'Livro']);

        $this->visit('admin/itemtypes/1')
             ->see('Livro');
    }

    public function testCreateNewItemtype()
    {
        $user = factory(User::class)->create(['id' => 1]);

        $this->be($user);

        $this->visit('admin/itemtypes/create')
                ->type('Livro', 'name')
                ->press('Create')
                ->seePageIs('admin/itemtypes')
                ->see('Itemtype added with success');
    }

    public function testEditItemtypeFromSingleItemtypeView()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $itemtype = factory(Itemtype::class)
                    ->create(['name' => 'Livro']);

        $this->visit('admin/itemtypes/1')
             ->see('Livro')
             ->click('edit_1')
             ->seePageIs('admin/itemtypes/1/edit')
             ->type('Artigo', 'name')
             ->press('Edit')
             ->seePageIs('admin/itemtypes')
             ->see('Itemtype edited with success')
             ->see('Artigo');
    }

    public function testEditItemtypeFromListItemtypeView()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $itemtype = factory(Itemtype::class)
                    ->create(['name' => 'Livro']);

        $itemtype = factory(Itemtype::class)
                    ->create(['name' => 'Artigo']);

        $this->visit('admin/itemtypes')
             ->see('Livro')
             ->click('edit_1')
             ->seePageIs('admin/itemtypes/1/edit')
             ->type('Livro 2', 'name')
             ->press('Edit')
             ->seePageIs('admin/itemtypes')
             ->see('Itemtype edited with success')
             ->see('Livro 2');
    }

    public function testDeleteItemtypeFromSingleItemtypeView()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $itemtype = factory(Itemtype::class)
                    ->create(['name' => 'Livro']);

        $this->visit('admin/itemtypes/1')
             ->see('Livro')
             ->press('delete_1')
             ->seePageIs('admin/itemtypes')
             ->dontSee('Livro');
    }

    public function testDeleteItemtypeFromListItemtypeView()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $itemtype = factory(Itemtype::class)
                    ->create(['name' => 'Livro']);

        $this->visit('admin/itemtypes')
             ->see('Livro')
             ->press('delete_1')
             ->seePageIs('admin/itemtypes')
             ->dontSee('Livro');
    }

    public function testAddMarcfieldToItemtype()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $marcfield = factory(Marcfield::class)
            ->create(['id' => 1, 'tagfield' => '001', 'description' => 'ISSN']);

        factory(Marcfield::class)
            ->create(['id' => 2, 'tagfield' => '010', 'description' => 'ISBN']);

        factory(Itemtype::class)
            ->create(['id' => 1, 'name' => 'Livro']);

        $this->visit('admin/itemtypes/1/edit')
            ->see('Livro')
            ->see('ISSN')
            ->see('ISBN')
            ->check('marcfields[1]')
            ->check('marcfields[2]')
            ->press('edit')
            ->seePageIs('admin/itemtypes')
            ->seeInDatabase('itemtype_marcfield', ['marcfield_id' => 1, 'itemtype_id' => 1])
            ->seeInDatabase('itemtype_marcfield', ['marcfield_id' => 2, 'itemtype_id' => 1]);
    }

}
