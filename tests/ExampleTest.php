<?php

class ExampleTest extends TestCase {

	/** @test */
	public function it_loads_the_homepage()
	{
		$this->visit('/')
			->andSee('Laravel');
	}
}
