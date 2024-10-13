<?php

namespace StellaMaris\CheckPackagistRepository;

interface WordPress
{
	public function add_action(string $action, callable $callable, int $priority): void
}
