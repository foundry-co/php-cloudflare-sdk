<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerScriptGetSettingsPlacement
{
	public function __construct(
		/** Enables [Smart Placement](https://developers.cloudflare.com/workers/configuration/smart-placement). */
		public ?\FoundryCo\Cloudflare\Enums\WorkerScriptGetSettingsPlacementMode $mode = null,
		/** Cloud region for targeted placement in format 'provider:region'. */
		public ?string $region = null,
		/** HTTP hostname for targeted placement. */
		public ?string $hostname = null,
		/** TCP host and port for targeted placement. */
		public ?string $host = null,
		/** Array of placement targets (currently limited to single target). */
		public ?array $target = null,
	) {
	}
}
