<?php declare(strict_types=1);

namespace StellaMaris\CheckPackagistRepository\Handler;

use StellaMaris\CheckPackagistRepository\HandlerInterface;
use StellaMaris\CheckPackagistRepository\WordPress;

final class SearchInstallPlugin implements HandlerInterface
{
	public function __invoke(array $parameters): void
	{

	}

	public static function register(WordPress $wp): void
	{
		$wp->add_action('wp_ajax_search-install-plugins', self::class, );
	}
}
