<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerAssetsUpload
{
	public function __construct(
		/** A "completion" JWT which can be redeemed when creating a Worker version. */
		public ?string $jwt = null,
	) {
	}
}
