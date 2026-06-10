<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Snapshot Thermal
 */
readonly class MconnConnectorTelemetrySnapshotsListLatestItemsItemThermalsItem
{
	public function __construct(
		/** Sensor identifier for the component */
		public ?string $label = null,
		/** Critical failure temperature of the component (degrees Celsius) */
		public ?float $criticalCelcius = null,
		/** Current temperature of the component (degrees Celsius) */
		public ?float $currentCelcius = null,
		/** Maximum temperature of the component (degrees Celsius) */
		public ?float $maxCelcius = null,
	) {
	}
}
