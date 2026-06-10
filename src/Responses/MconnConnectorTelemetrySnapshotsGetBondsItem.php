<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Snapshot Bond
 */
readonly class MconnConnectorTelemetrySnapshotsGetBondsItem
{
	public function __construct(
		/** Name of the network interface */
		public ?string $name = null,
		/** Current status of the network interface */
		public ?string $status = null,
	) {
	}
}
