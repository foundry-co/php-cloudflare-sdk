<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Exactly one of id, serial_number, or provision_license must be provided.
 */
readonly class MconnConnectorCreateRequestDevice
{
	public function __construct(
		public ?string $id = null,
		/** When true, create and provision a new licence key for the connector. */
		public ?bool $provisionLicense = null,
		public ?string $serialNumber = null,
	) {
	}
}
