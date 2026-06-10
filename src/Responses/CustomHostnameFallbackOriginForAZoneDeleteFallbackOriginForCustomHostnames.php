<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CustomHostnameFallbackOriginForAZoneDeleteFallbackOriginForCustomHostnames
{
	public function __construct(
		/** This is the time the fallback origin was created. */
		public ?\DateTimeImmutable $createdAt = null,
		/** Your origin hostname that requests to your custom hostnames will be sent to. */
		public ?string $origin = null,
		/** Status of the fallback origin's activation. */
		public ?\FoundryCo\Cloudflare\Enums\CustomHostnameFallbackOriginForAZoneDeleteFallbackOriginForCustomHostnamesStatus $status = null,
		/** This is the time the fallback origin was updated. */
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
