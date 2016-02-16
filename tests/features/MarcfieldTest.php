<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Biblio;
use App\User;
use App\Marcfield;
use App\Marcsubfield;

class MarcfieldTest extends TestCase
{

    use DatabaseTransactions;

    public function testMarcfieldHasATagfieldAndADescription()
    {
        $marcfield = factory(Marcfield::class)
                    ->create(['tagfield' => '010', 'description' => 'ISBN']);

        $this->assertEquals('010', $marcfield->tagfield);
        $this->assertEquals('ISBN', $marcfield->description);

    }

    public function testMarcfieldChangeTagfield()
    {
        $marcfield = factory(Marcfield::class)
                    ->create(['tagfield' => '001']);

        $marcfield->tagfield = '010';

        $this->assertEquals('010', $marcfield->tagfield);

    }


    public function testViewListOfMarcfields()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        factory(Marcfield::class)
            ->create(['tagfield' => '010', 'description' => 'ISBN']);

        factory(Marcfield::class)
            ->create(['tagfield' => '001', 'description' => 'ISSN']);

        $this->visit('admin/marcfields')
             ->see('010')
             ->see('001')
             ->see('ISBN')
             ->see('ISSN');

    }

    public function testViewOneMarcfield()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        factory(Marcfield::class)
            ->create(['id' => 1, 'tagfield' => '001', 'description' => 'ISSN']);

        $this->visit('admin/marcfields/1')
             ->see('001')
             ->see('ISSN');

    }

    public function testAtLeastOneSubmarcfieldIsMandatoryWhenCreatingAMarcfield()
    {
        $admin = factory(User::class)->create(['id' => 1]);

        $this->be($admin);

        $this->visit('admin/marcfields/create')
                ->type('010', 'tagfield')
                ->type('ISBN', 'description')
                ->check('mandatory')
                ->press('Create')
                ->seePageIs('admin/marcfields/create')
                ->see('The field description (1) is required.');
    }

    public function testCreateNewMarcfield()
    {
        $admin = factory(User::class)->create(['id' => 1]);

        $this->be($admin);

        $this->visit('admin/marcfields/create')
                ->type('010', 'tagfield')
                ->type('ISBN', 'description')
                ->check('mandatory')
                ->type('a', 'records[1][tagsubfield]')
                ->type('isbn value', 'records[1][description]')
                ->check('records[1][mandatory]')
                ->check('records[1][repeatable]')
                ->press('Create')
                ->seePageIs('admin/marcfields')
                ->see('Marcfield added with success')
                ->see('ISBN')
                ->seeInDatabase('marcfields', ['id' => 1, 'description' => 'ISBN'])
                ->seeInDatabase('marcsubfields', ['id' => 1, 'tagfield' => 1, 'description' => 'isbn value', 'repeatable' => 1, 'mandatory' => 1]);
    }



    public function testEditMarcfieldFromSingleMarcfieldView()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $marcfield = factory(Marcfield::class)
            ->create(['id' => 1, 'tagfield' => '001', 'description' => 'ISSN']);

        factory(Marcsubfield::class)
            ->create(['tagfield' => $marcfield->id, 'tagsubfield' => 'aaa', 'description' => 'ISSN value']);


        $this->visit('admin/marcfields/1')
             ->see('001')
             ->click('edit_1')
             ->seePageIs('admin/marcfields/1/edit')
             ->see('ISSN value')
             ->type('010', 'tagfield')
             ->type('ISBN', 'description')
             ->type('a', 'records[1][tagsubfield]')
             ->type('isbn value', 'records[1][description]')
             ->check('records[1][repeatable]')
             ->check('records[1][mandatory]')
             ->press('Edit')
             ->seePageIs('admin/marcfields')
             ->see('Marcfield edited with success')
             ->see('ISBN')
             ->seeInDatabase('marcfields', ['id' => 1, 'description' => 'ISBN'])
             ->seeInDatabase('marcsubfields', ['tagfield' => 1, 'description' => 'isbn value', 'tagsubfield' => 'a', 'repeatable' => 1, 'mandatory' => 1]);
    }

    public function testEditMarcfieldFromListMarcfieldView()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $marcfield = factory(Marcfield::class)
            ->create(['id' => 1, 'tagfield' => '010', 'description' => 'ISB']);

        factory(Marcfield::class)
            ->create(['tagfield' => '001', 'description' => 'ISSN']);

        factory(Marcsubfield::class)
            ->create(['tagfield' => $marcfield->id, 'tagsubfield' => 'aaa', 'description' => 'ISSN value']);

        $this->visit('admin/marcfields')
             ->see('ISB')
             ->click('edit_1')
             ->seePageIs('admin/marcfields/1/edit')
             ->see('ISSN value')
             ->type('010', 'tagfield')
             ->type('ISBN', 'description')
             ->type('a', 'records[1][tagsubfield]')
             ->type('isbn value', 'records[1][description]')
             ->check('records[1][repeatable]')
             ->check('records[1][mandatory]')
             ->press('Edit')
             ->seePageIs('admin/marcfields')
             ->see('Marcfield edited with success')
             ->see('ISBN')
             ->seeInDatabase('marcfields', ['id' => 1, 'description' => 'ISBN'])
             ->seeInDatabase('marcsubfields', ['tagfield' => 1, 'description' => 'isbn value', 'tagsubfield' => 'a', 'repeatable' => 1, 'mandatory' => 1]);
    }

    public function testDeleteMarcfieldFromSingleMarcfieldView()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $marcfield = factory(Marcfield::class)
            ->create(['id' => 1, 'tagfield' => '001', 'description' => 'ISSN']);

        factory(Marcsubfield::class)
            ->create(['tagfield' => $marcfield->id, 'tagsubfield' => 'aaa', 'description' => 'ISSN value']);

        $this->seeInDatabase('marcfields', ['id' => 1, 'description' => 'ISSN'])
             ->seeInDatabase('marcsubfields', ['tagfield' => 1, 'description' => 'ISSN value', 'tagsubfield' => 'aaa']);

        $this->visit('admin/marcfields/1')
             ->see('ISSN')
             ->press('delete_1')
             ->seePageIs('admin/marcfields')
             ->dontSee('ISSN')
             ->dontSeeInDatabase('marcfields', ['id' => 1, 'description' => 'ISSN'])
             ->dontSeeInDatabase('marcsubfields', ['id' => 1, 'description' => 'ISSN value']);
    }

    public function testDeleteMarcfieldFromListMarcfieldView()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $marcfield = factory(Marcfield::class)
            ->create(['id' => 1, 'tagfield' => '001', 'description' => 'ISSN']);

        factory(Marcfield::class)
            ->create(['id' => 2, 'tagfield' => '010', 'description' => 'ISBN']);

        factory(Marcsubfield::class)
            ->create(['tagfield' => $marcfield->id, 'tagsubfield' => 'aaa', 'description' => 'ISSN value']);

        $this->seeInDatabase('marcfields', ['id' => 1, 'description' => 'ISSN'])
             ->seeInDatabase('marcsubfields', ['tagfield' => 1, 'description' => 'ISSN value', 'tagsubfield' => 'aaa']);

        $this->visit('admin/marcfields')
             ->see('ISSN')
             ->press('delete_1')
             ->seePageIs('admin/marcfields')
             ->dontSee('ISSN')
             ->dontSeeInDatabase('marcfields', ['id' => 1, 'description' => 'ISSN'])
             ->dontSeeInDatabase('marcsubfields', ['id' => 1, 'description' => 'ISSN value']);;
    }

    public function testDeleteMarcsubfield()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $marcfield = factory(Marcfield::class)
            ->create(['id' => 1, 'tagfield' => '001', 'description' => 'ISSN']);

        factory(Marcfield::class)
            ->create(['id' => 2, 'tagfield' => '010', 'description' => 'ISBN']);

        factory(Marcsubfield::class)
            ->create(['tagfield' => $marcfield->id, 'tagsubfield' => 'aaa', 'description' => 'ISSN value']);

        factory(Marcsubfield::class)
            ->create(['tagfield' => $marcfield->id, 'tagsubfield' => 'bbb', 'description' => 'ISSN 2']);

        $this->seeInDatabase('marcfields', ['id' => 1, 'description' => 'ISSN'])
             ->seeInDatabase('marcsubfields', ['tagfield' => 1, 'description' => 'ISSN value', 'tagsubfield' => 'aaa']);

        $this->visit('admin/marcfields/1/edit')
             ->see('ISSN value')
             ->click('delete_1')
             ->seePageIs('admin/marcfields/1/edit')
             ->dontSee('ISSN value')
             ->DontSeeInDatabase('marcsubfields', ['id' => 1, 'description' => 'ISSN value']);;
    }    


    public function testDontDeleteMarcsubfieldIfThereIsOnlyOne()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $marcfield = factory(Marcfield::class)
            ->create(['id' => 1, 'tagfield' => '001', 'description' => 'ISSN']);

        factory(Marcfield::class)
            ->create(['id' => 2, 'tagfield' => '010', 'description' => 'ISBN']);

        factory(Marcsubfield::class)
            ->create(['tagfield' => $marcfield->id, 'tagsubfield' => 'aaa', 'description' => 'ISSN value']);

        $this->seeInDatabase('marcfields', ['id' => 1, 'description' => 'ISSN'])
             ->seeInDatabase('marcsubfields', ['tagfield' => 1, 'description' => 'ISSN value', 'tagsubfield' => 'aaa']);

        $this->visit('admin/marcfields/1/edit')
             ->see('ISSN value')
             ->click('delete_1')
             ->seePageIs('admin/marcfields/1/edit')
             ->see('ISSN value')
             ->seeInDatabase('marcsubfields', ['id' => 1, 'description' => 'ISSN value']);
    }

}
