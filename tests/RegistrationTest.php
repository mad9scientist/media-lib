<?php
use Laracasts\TestDummy\Factory as TestDummy;

class RegistrationTest extends TestCase {
	/** @test */
	public function it_sign_up_for_an_account()
	{
		$this->visit('/auth/register/')
			->type('Chris', 'firstName')
			->type('Holbrook', 'lastName')
			->type('testing@madscitech.com', 'email')
			->type('password123', 'password')
			->type('password123', 'password_confirmation')
			->press('Register')
			->seeInDatabase('users', ['firstName' => 'Chris']);
	}
}