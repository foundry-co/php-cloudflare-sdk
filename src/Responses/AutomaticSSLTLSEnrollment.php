<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AutomaticSSLTLSEnrollment
{
	public function __construct(
		/** Whether this setting can be updated or not. */
		public bool $editable,
		public string $id,
		/** Last time this setting was modified. */
		public \DateTimeImmutable $modifiedOn,
		/** Current setting of the automatic SSL/TLS. */
		public \FoundryCo\Cloudflare\Enums\AutomaticSSLTLSEnrollmentValue $value,
		/** Next time this zone will be scanned by the Automatic SSL/TLS. */
		public ?\DateTimeImmutable $nextScheduledScan = null,
	) {
	}
}
