<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AigConfigPostGatewayDynamicRouteVersion
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\AigConfigPostGatewayDynamicRouteVersionActive $active = null,
		public ?string $createdAt = null,
		public ?string $data = null,
		public ?string $versionId = null,
		public ?bool $isValid = null,
	) {
	}
}
