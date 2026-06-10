<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Configure DMARC Reports
 */
readonly class ConfigureDmarcReportsRequest
{
	public function __construct(
		/** Enable or disable DMARC reports for this zone */
		public ?bool $enabled = null,
		/** Skip the DMARC setup wizard */
		public ?bool $skipWizard = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'enabled' => $this->enabled,
		    'skip_wizard' => $this->skipWizard,
		], fn ($v) => $v !== null);
	}
}
