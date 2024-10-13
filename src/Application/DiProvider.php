<?php declare(strict_types=1);

namespace StellaMaris\CheckPackagistRepository;

final class DiProvider implements
{
	public function get(string $className): object
	{
		return new $className();
	}
}
