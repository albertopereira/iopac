<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Biblio;
use App\User;
use App\Marcfield;
use App\Marcsubfield;
use App\Record;
use App\RecordField;
use App\Itemtype;

class RecordTest extends TestCase
{

    use DatabaseMigrations;
	use DatabaseTransactions;
    
    public function testCreateRecord()
    {
        $user = factory(User::class)->create(['id' => 1]);

        $this->be($user);

		$itemtype = factory(Itemtype::class)
            ->create(['id' => 2, 'name' => 'Livro']);

        $biblio = factory(Biblio::class)
            ->create(['id' => 1, 'name' => 'Biblioteca']);

        $record = factory(Record::class)
            ->create([
            		'id' => 1, 
            		'biblio' => 1, 
            		'itemtype' => 2, 
            		'hidden' => 1
            		]);

        $field = factory(RecordField::class)
            ->create([
            		'id' => 1, 
            		'record_id' => 1,
            		'tagfield' => 1, 
            		'tagsubfield' => 2, 
            		'value' => 'ISSN',
            		]);

        $this->seeInDatabase('records', ['id' => 1, 'biblio' => 1, 'itemtype' => 2, 'hidden' => 1])
        	 ->seeInDatabase('records_fields', ['id' => 1, 'record_id' => 1, 'tagfield' => 1, 'tagsubfield' => 2, 'value' => 'ISSN']);
    }


    public function testCreateRecordFromView()
    {
    	Session::put('biblio_id', 1);

    	Session::put('itemtype_id', 1);

        $user = factory(User::class)->create(['id' => 1]);

        $this->be($user);

        $marcfield = factory(Biblio::class)
            ->create(['id' => 1, 'name' => 'Biblioteca']);

        $marcfield = factory(Marcfield::class)
            ->create(['id' => 1, 'tagfield' => '200', 'description' => 'Title and responsibility']);

        $marcsubfield = factory(Marcsubfield::class)
            ->create(['id' => 1, 'tagfield' => 1, 'tagsubfield' => 'a', 'description' => 'Title value', 'mandatory' => 1]);

        $marcsubfield_2 = factory(Marcsubfield::class)
            ->create(['id' => 2, 'tagfield' => 1, 'tagsubfield' => 'b', 'description' => 'Author', 'mandatory' => 0]);

        $marcfield->marcsubfields()->saveMany(array($marcsubfield, $marcsubfield_2));

        $itemtype = factory(Itemtype::class)
            ->create(['id' => 1, 'name' => 'Livro']);

        $itemtype->marcfields()->save($marcfield);


        $this->visit('admin/itemtypes/1/change')
        	 ->see('Title and responsibility')
        	 ->see('Title value')
        	 ->see('Livro')
        	 ->check('hidden')
        	 ->type('Title of book', 'fields[0][value]')
        	 ->type('Name of author', 'fields[1][value]')
        	 ->press('Create')
        	 ->seePageIs('admin/records')
        	 ->see('Title of book')
        	 ->seeInDatabase('records', ['id' => 1, 'biblio' => 1, 'itemtype' => 1, 'hidden' => 1])
        	 ->seeInDatabase('records_fields', ['id' => 1, 'record_id' => 1, 'tagfield' => 1, 'tagsubfield' => 1, 'value' => 'Title of book'])
        	 ->seeInDatabase('records_fields', ['id' => 2, 'record_id' => 1, 'tagfield' => 1, 'tagsubfield' => 2, 'value' => 'Name of author']);
    }

    public function testThereIsNoBiblioSelectedOnCreateRecord(){

        $user = factory(User::class)->create(['id' => 1]);

        $this->be($user);

        Session::put('biblio_id', 1);

        $this->visit('admin/records/create')
             ->see('Please select an Itemtype');
    }

    public function testThereIsNoItemtypeSelectedOnCreateRecord(){

        $user = factory(User::class)->create(['id' => 1]);

        $this->be($user);
        
        $this->visit('admin/records/create')
             ->see('Please select a Library');
    }

    public function testEditRecordFromView()
    {
    	Session::put('biblio_id', 1);

    	Session::put('itemtype_id', 1);

        $user = factory(User::class)->create(['id' => 1]);

        $this->be($user);

        $marcfield = factory(Biblio::class)
            ->create(['id' => 1, 'name' => 'Biblioteca']);

        $marcfield = factory(Marcfield::class)
            ->create(['id' => 1, 'tagfield' => '200', 'description' => 'Title and responsibility']);

        $marcsubfield = factory(Marcsubfield::class)
            ->create(['id' => 1, 'tagfield' => 1, 'tagsubfield' => 'a', 'description' => 'Title value', 'mandatory' => 1]);

        $marcsubfield_2 = factory(Marcsubfield::class)
            ->create(['id' => 2, 'tagfield' => 1, 'tagsubfield' => 'b', 'description' => 'Author', 'mandatory' => 0]);

        $marcfield->marcsubfields()->saveMany(array($marcsubfield, $marcsubfield_2));

        $itemtype = factory(Itemtype::class)
            ->create(['id' => 1, 'name' => 'Livro']);

        $itemtype->marcfields()->save($marcfield);

        $record = factory(Record::class)
        	->create(['biblio' => 1, 'itemtype' => 1, 'hidden' => 1]);

        $record_fields = factory(RecordField::class)
        	->create(['record_id' => 1, 'tagfield' => 1, 'tagsubfield' => 1, 'value' => 'Título do Livro']);


        $this->visit('admin/records')
        	 ->see('Título do Livro')
        	 ->click('edit_1')
        	 ->see('Title value')
        	 ->see('Título do Livro')
        	 ->type('Novo Título', 'fields[0][value]')
        	 ->press('Edit')
        	 ->seeInDatabase('records', ['id' => 1, 'biblio' => 1, 'itemtype' => 1, 'hidden' => 1])
        	 ->seeInDatabase('records_fields', ['id' => 1, 'record_id' => 1, 'tagfield' => 1, 'tagsubfield' => 1, 'value' => 'Novo Título']);;
    }


    public function testShowRecord()
    {
    	Session::put('biblio_id', 1);

    	Session::put('itemtype_id', 1);

        $user = factory(User::class)->create(['id' => 1]);

        $this->be($user);

        $marcfield = factory(Biblio::class)
            ->create(['id' => 1, 'name' => 'Biblioteca']);

        $marcfield = factory(Marcfield::class)
            ->create(['id' => 1, 'tagfield' => '200', 'description' => 'Title and responsibility']);

        $marcsubfield = factory(Marcsubfield::class)
            ->create(['id' => 1, 'tagfield' => 1, 'tagsubfield' => 'a', 'description' => 'Title value', 'mandatory' => 1]);

        $marcsubfield_2 = factory(Marcsubfield::class)
            ->create(['id' => 2, 'tagfield' => 1, 'tagsubfield' => 'b', 'description' => 'Author', 'mandatory' => 0]);

        $marcfield->marcsubfields()->saveMany(array($marcsubfield, $marcsubfield_2));

        $itemtype = factory(Itemtype::class)
            ->create(['id' => 1, 'name' => 'Livro']);

        $itemtype->marcfields()->save($marcfield);


        $this->visit('admin/records/create')
        	 ->see('Title and responsibility')
        	 ->see('Title value')
        	 ->see('Livro')
        	 ->check('hidden')
        	 ->type('Title of book', 'fields[0][value]')
        	 ->type('Name of author', 'fields[1][value]')
        	 ->press('Create')
        	 ->seePageIs('admin/records')
        	 ->see('Title of book')
        	 ->click('show_1')
        	 ->seePageIs('admin/records/1')
        	 ->see('Title of book')
        	 ->see('Name of author');
    }

    public function testDeleteRecord()
    {
        $user = factory(User::class)->create(['id' => 1]);

        $this->be($user);

		$itemtype = factory(Itemtype::class)
            ->create(['id' => 2, 'name' => 'Livro']);

        $biblio = factory(Biblio::class)
            ->create(['id' => 1, 'name' => 'Biblioteca']);

        $record = factory(Record::class)
            ->create([
            		'id' => 1, 
            		'biblio' => 1, 
            		'itemtype' => 2, 
            		'hidden' => 1
            		]);

        $field = factory(RecordField::class)
            ->create([
            		'id' => 1, 
            		'record_id' => 1,
            		'tagfield' => 1, 
            		'tagsubfield' => 2, 
            		'value' => 'ISSN',
            		]);

        $this->visit('admin/records/1')
        	 ->press('delete_1')
        	 ->dontSeeInDatabase('records', ['id' => 1, 'biblio' => 1, 'itemtype' => 2, 'hidden' => 1])
        	 ->dontSeeInDatabase('records_fields', ['id' => 1, 'record_id' => 1, 'tagfield' => 1, 'tagsubfield' => 2, 'value' => 'ISSN']);
    }



}
