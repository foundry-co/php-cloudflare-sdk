<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a Web Analytics site
 */
readonly class WebAnalyticsUpdateSiteRequest
{
	public function __construct(
		/** If enabled, the JavaScript snippet is automatically injected for orange-clouded sites. */
		public ?bool $autoInstall = null,
		/** Enables or disables RUM. This option can be used only when auto_install is set to true. */
		public ?bool $enabled = null,
		/** The hostname to use for gray-clouded sites. */
		public ?string $host = null,
		/** If enabled, the JavaScript snippet will not be injected for visitors from the EU. */
		public ?bool $lite = null,
		/** The zone identifier. */
		public ?string $zoneTag = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'auto_install' => $this->autoInstall,
		    'enabled' => $this->enabled,
		    'host' => $this->host,
		    'lite' => $this->lite,
		    'zone_tag' => $this->zoneTag,
		], fn ($v) => $v !== null);
	}
}
