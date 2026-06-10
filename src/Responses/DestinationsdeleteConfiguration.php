<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DestinationsdeleteConfiguration
{
	public function __construct(
		public ?string $destinationConf = null,
		public ?\FoundryCo\Cloudflare\Enums\DestinationsdeleteConfigurationLogpushDataset $logpushDataset = null,
		public ?float $logpushJob = null,
		public ?\FoundryCo\Cloudflare\Enums\DestinationsdeleteConfigurationType $type = null,
		public ?string $url = null,
	) {
	}
}
