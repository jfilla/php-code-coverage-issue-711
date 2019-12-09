<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\Example;

class ExampleTest extends TestCase
{

	public function testA(): void
	{
		$this->assertEquals('a', Example::a('a'));

	}

}