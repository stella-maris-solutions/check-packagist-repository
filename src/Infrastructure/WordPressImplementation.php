<?php declare(strict_types=1);

namespace StellaMaris\CheckPackagistRepository;

final class WordPressImplementation implements WordPress
{

	public function add_action(string $action, callable $callable, int $priority = 10): void
	{
		add_action($action, $callable, $priority);
	}
}
