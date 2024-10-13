<?php

namespace StellaMaris\CheckPackagistRepository;

interface HandlerInterface
{
	/**
	 * @param array<mixed> $arguments
	 */
	public function __invoke(array $arguments): void;

	public static function register(WordPress $wp): void;
}
