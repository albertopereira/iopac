<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Biblio;
use App\User;
use App\Marcfield;
use App\Marcsubfield;
use App\Itemtype;
use App\Record;
use App\RecordField;


class SearchTest extends \Tests\BrowserKitTestCase  
{

    use DatabaseMigrations;
    use DatabaseTransactions;

    protected $itemtype;

    public function setUp(){
    
        parent::setUp();
 
        Session::put('biblio_id', 1);

        Session::put('itemtype_id', 1);

        $user = factory(User::class)->create(['id' => 1]);

        $this->be($user);

        $biblio = factory(Biblio::class)
            ->create(['id' => 1, 'name' => 'Biblioteca']);

        $this->itemtype = factory(Itemtype::class)
            ->create(['id' => 1, 'name' => 'Livro']);

        $this->createRecord(1, 'Title of the book','Name of the author', 'Title of the subject', 0);

        $this->createRecord(2, 'Another title','Another name', 'Another subject', 0);

    }

    public function testSimpleSearchByTitle()
    {

        $this->visit('/search?tagfield=200&tagsubfield=a&arquivo=Todos+os+arquivos&expressao=book')
             ->press('Pesquisar')
             ->see('book');

    }

    public function testSimpleSearchBySubject()
    {

        $this->visit('/search?tagfield=605&tagsubfield=a&arquivo=Todos+os+arquivos&expressao=the+subject')
             ->press('Pesquisar')
             ->see('Title of the subject');

    }

    public function testSimpleSearchByAuthor()
    {

        $this->visit('/search?tagfield=700&tagsubfield=a&arquivo=Todos+os+arquivos&expressao=the+author')
             ->press('Pesquisar')
             ->see('Name of the author');

    }

    public function testAdvancedSearchAnd()
    {

        $this->visit('/advanced-results?tagfields[]=200&tagsubfields[]=a&expressoes[]=book&conditions[]=and&tagfields[]=700&tagsubfields[]=a&expressoes[]=author&conditions[]=and&tagfields[]=&tagsubfields[]=*&expressoes[]=&arquivo=*')
             ->see('Title of the book')
             ->see('Name of the author')
             ->dontSee('Another title');

    }

    public function testAdvancedSearchOr()
    {

        $this->visit('/advanced-results?tagfields[]=200&tagsubfields[]=a&expressoes[]=book&conditions[]=or&tagfields[]=700&tagsubfields[]=a&expressoes[]=another&conditions[]=and&tagfields[]=&tagsubfields[]=*&expressoes[]=&arquivo=*')
             ->see('Title of the book')
             ->see('Name of the author')
             ->see('Another title')
             ->see('Another subject');

    }    

    private function createRecord($i, $title, $author, $subject, $hidden)
    {
        $i = $i * 3 - 2; //setting the initial id for each iteration

        $marcfield = factory(Marcfield::class)
            ->create(['id' => $i, 'tagfield' => '200', 'description' => 'Title and responsibility']);

        $marcfield_2 = factory(Marcfield::class)
            ->create(['id' => $i + 1, 'tagfield' => '700', 'description' => 'Author']);

        $marcfield_3 = factory(Marcfield::class)
            ->create(['id' => $i + 2, 'tagfield' => '605', 'description' => 'Subject']);

        $marcsubfield = factory(Marcsubfield::class)
            ->create(['id' => $i, 'tagfield' => $marcfield->id, 'tagsubfield' => 'a', 'description' => 'Title value', 'mandatory' => 1]);

        $marcsubfield_2 = factory(Marcsubfield::class)
            ->create(['id' => $i + 1, 'tagfield' => $marcfield_2->id, 'tagsubfield' => 'a', 'description' => 'Author', 'mandatory' => 0]);

        $marcsubfield_3 = factory(Marcsubfield::class)
            ->create(['id' => $i + 2, 'tagfield' => $marcfield_3->id, 'tagsubfield' => 'a', 'description' => 'Subject', 'mandatory' => 0]);

        $marcfield->marcsubfields()->save($marcsubfield);
        $marcfield_2->marcsubfields()->save($marcsubfield_2);
        $marcfield_3->marcsubfields()->save($marcsubfield_3);

        $this->itemtype->marcfields()->saveMany(array($marcfield, $marcfield_2, $marcfield_3));

        $record = factory(Record::class)
            ->create([
                    'id' => $i, 
                    'biblio' => 1, 
                    'itemtype' => 1, 
                    'hidden' => $hidden
                    ]);

        $field = factory(RecordField::class)
            ->create([
                    'id' => $i, 
                    'record_id' => $record->id,
                    'tagfield' => $marcfield->id,
                    'tagsubfield' => $marcsubfield->id, 
                    'value' => $title,
                    ]);

        $field = factory(RecordField::class)
            ->create([
                    'id' => $i+1, 
                    'record_id' => $record->id,
                    'tagfield' => $marcfield_2->id, 
                    'tagsubfield' => $marcsubfield_2->id, 
                    'value' => $author,
                    ]);

        $field = factory(RecordField::class)
            ->create([
                    'id' => $i+2, 
                    'record_id' => $record->id,
                    'tagfield' => $marcfield_3->id, 
                    'tagsubfield' => $marcsubfield_3->id,
                    'value' => $subject,
                    ]);
    }
}
