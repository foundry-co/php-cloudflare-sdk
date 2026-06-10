<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a Web Analytics site
 */
readonly class WebAnalyticsCreateSiteRequest
{
	public function __construct(
		/** If enabled, the JavaScript snippet is automatically injected for orange-clouded sites. */
		public ?bool $autoInstall = null,
		/** The hostname to use for gray-clouded sites. */
		public ?string $host = null,
		/** The zone identifier. */
		public ?string $zoneTag = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'auto_install' => $this->autoInstall,
		    'host' => $this->host,
		    'zone_tag' => $this->zoneTag,
		], fn ($v) => $v !== null);
	}
}
