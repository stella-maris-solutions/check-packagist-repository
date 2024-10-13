<?php declare(strict_types=1);

namespace StellaMaris\CheckPackagistRepository;

use StellaMaris\CheckPackagistRepository\Handler\SearchInstallPlugin;

final class Plugin
{
	public function __construct(
		private DiProvider $container,
	) {}

	public static function init(): void
	{
		$plugin = new Plugin(new DiProvider());
	}

	public function setHooksAndFilters(): void
	{
		SearchInstallPlugin::register($this->container->get(WordPress::class));
	}
}
