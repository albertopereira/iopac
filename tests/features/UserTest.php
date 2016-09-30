<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Biblio;
use App\User;

class UserTest extends TestCase
{
    use DatabaseMigrations;
    use DatabaseTransactions;

    public function testUserHasAName()
    {
        $user = factory(User::class)
                    ->create(['name' => 'Alberto Pereira']);

        $this->assertEquals('Alberto Pereira', $user->name);

    }

    public function testUserChangeName()
    {
        $user = factory(User::class)
                    ->create(['name' => 'Alberto Pereira']);

        $user->name = 'Alberto Esteves';

        $this->assertEquals('Alberto Esteves', $user->name);

    }


    public function testViewListOfUsers()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        factory(User::class)
            ->create(['name' => 'Alberto Pereira']);

        factory(User::class)
            ->create(['name' => 'Alberto Esteves']);

        $this->visit('admin/users')
             ->see('Alberto Pereira')
             ->see('Alberto Esteves');

    }    

    public function testViewOneUser()
    {
        $user = factory(User::class)->create();


        $user2 = factory(User::class)
                    ->create(['name' => 'Alberto Pereira']);

        $this->be($user);

        $this->visit('admin/users/2')
             ->see('Alberto Pereira');
    }

    public function testCreateNewUser()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $this->visit('admin/users/create')
                ->type('Alberto Pereira', '#name')
                ->type('albertopereira@ces.uc.pt', '#email')
                ->type('password', '#password')
                ->type('password', '#password_confirmation')
                ->press('Create')
                ->seePageIs('admin/users')
                ->see('User added with success');
    }

    public function testEditUserFromSingleUserView()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        factory(User::class)
            ->create(['name' => 'Alberto Pereira']);

        $this->visit('admin/users/2')
             ->see('Alberto Pereira')
             ->click('edit_2')
             ->seePageIs('admin/users/2/edit')
             ->type('Alberto Esteves', 'name')
             ->press('Edit')
             ->seePageIs('admin/users')
             ->see('User edited with success')
             ->see('Alberto Esteves');
    }

    public function testEditUserFromListUserView()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        factory(User::class)
            ->create(['name' => 'Alberto Pereira']);

        factory(User::class)
            ->create(['name' => 'Alberto Esteves']);

        $this->visit('admin/users')
             ->see('Alberto Pereira')
             ->click('edit_2')
             ->seePageIs('admin/users/2/edit')
             ->type('Alberto Esteves Pereira', 'name')
             ->press('Edit')
             ->seePageIs('admin/users')
             ->see('User edited with success')
             ->see('Alberto Esteves Pereira');
    }

    public function testDeleteUserFromSingleBiblioView()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $user = factory(User::class)
                    ->create(['name' => 'Alberto Pereira']);

        $this->visit('admin/users/2')
             ->see('Alberto Pereira')
             ->press('delete_2')
             ->seePageIs('admin/users')
             ->dontSee('Alberto Pereira');
    }

    public function testDeleteUserFromListBiblioView()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $user = factory(User::class)
                    ->create(['name' => 'Alberto Pereira']);

        $this->visit('admin/users')
             ->see('Alberto Pereira')
             ->press('delete_2')
             ->seePageIs('admin/users')
             ->dontSee('Alberto Pereira');
    }

    public function testIsUserAdmin()
    {
        $user = factory(User::class)->create();

        $this->assertTrue($user->isAdmin());
    }

    public function testIsUserNotAdmin()
    {
        factory(User::class)->create();
        
        $user = factory(User::class)->create();

        $this->assertFalse($user->isAdmin());
    }

    public function testIsUnauthorizedIfNotAdmin()
    {
        factory(User::class)->create();
        
        $user = factory(User::class)->create();


        $this->visit('/admin/users/create')
             ->seePageIs('/');
    }

    public function testIsUnauthorizedIfNotLoggedIn()
    {
        $this->visit('/admin')
             ->seePageIs('/login');
    }
    
}
