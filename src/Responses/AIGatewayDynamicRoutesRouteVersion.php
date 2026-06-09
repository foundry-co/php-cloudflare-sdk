<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AIGatewayDynamicRoutesRouteVersion
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\AIGatewayDynamicRoutesRouteVersionActive $active,
		public string $createdAt,
		public string $data,
		public string $versionId,
		public ?bool $isValid = null,
	) {
	}
}
