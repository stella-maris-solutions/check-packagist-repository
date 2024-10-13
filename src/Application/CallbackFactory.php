<?php declare(strict_types=1);

namespace StellaMaris\CheckPackagistRepository;

final class CallbackFactory
{
	private static DiProvider|null $container = null;
	public static function handler(string $class): HandlerInterface
	{
		return self::container()->get($class);
	}

	public static function container(): DiProvider
	{
		if (null === self::$container) {
			self::$container = new DiProvider();
		}

		return self::$container;
	}
}
