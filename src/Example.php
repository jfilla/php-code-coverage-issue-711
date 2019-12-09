<?php declare(strict_types=1);

namespace Src;

class Example
{


	public static function a($x): string
	{
		return self::b(
			self::b(
				$x
			)
		);

	}

	private static function b(string $x): string
	{
		return $x;
	}


}