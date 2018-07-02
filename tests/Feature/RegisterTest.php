<?php

namespace Tests\Feature;

use App\Entities\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class RegisterTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * The registration form can be displayed.
     *
     * @return void
     */
    public function testRegisterFormDisplayed()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    /**
     * A valid user can be registered.
     *
     * @return void
     */
    public function testRegistersAValidUser()
    {
        $user = factory(User::class)->make();
        $response = $this->post('register', [
            'username' => $user->username,
            'email' => $user->email,
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);
        $response->assertStatus(302);
        $this->assertAuthenticated();
    }

    /**
     * A user with an existing username is not registered.
     *
     * @return void
     */
    public function testDoesNotRegisterAnExistingUsername()
    {
        $existingUser = factory(User::class)->create();
        $user = factory(User::class)->make();
        $response = $this->post('register', [
            'username' => $existingUser->username,
            'email' => $user->email,
            'password' => 'password',
            'password_confirmation' => 'invalid'
        ]);
        $response->assertSessionHasErrors();
        $this->assertGuest();
    }

    /**
     * A user with an existing email address is not registered.
     *
     * @return void
     */
    public function testDoesNotRegisterAnExistingAddress()
    {
        $existingUser = factory(User::class)->create();
        $user = factory(User::class)->make();
        $response = $this->post('register', [
            'username' => $user->username,
            'email' => $existingUser->email,
            'password' => 'password',
            'password_confirmation' => 'invalid'
        ]);
        $response->assertSessionHasErrors();
        $this->assertGuest();
    }

    /**
     * A user with an invalid password is not registered.
     *
     * @return void
     */
    public function testDoesNotRegisterAnInvalidPassword()
    {
        $user = factory(User::class)->make();
        $response = $this->post('register', [
            'username' => $user->username,
            'email' => $user->email,
            'password' => 'password',
            'password_confirmation' => 'invalid'
        ]);
        $response->assertSessionHasErrors();
        $this->assertGuest();
    }
}
