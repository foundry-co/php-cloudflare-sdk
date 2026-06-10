<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DestinationlistConfiguration
{
	public function __construct(
		public ?string $destinationConf = null,
		public ?array $headers = null,
		public ?DestinationlistConfigurationJobStatus $jobStatus = null,
		public ?\FoundryCo\Cloudflare\Enums\DestinationlistConfigurationLogpushDataset $logpushDataset = null,
		public ?\FoundryCo\Cloudflare\Enums\DestinationlistConfigurationType $type = null,
		public ?string $url = null,
	) {
	}
}
