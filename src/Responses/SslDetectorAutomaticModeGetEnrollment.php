<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SslDetectorAutomaticModeGetEnrollment
{
	public function __construct(
		/** Whether this setting can be updated or not. */
		public ?bool $editable = null,
		public ?string $id = null,
		/** Last time this setting was modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** Current setting of the automatic SSL/TLS. */
		public ?\FoundryCo\Cloudflare\Enums\SslDetectorAutomaticModeGetEnrollmentValue $value = null,
		/** Next time this zone will be scanned by the Automatic SSL/TLS. */
		public ?\DateTimeImmutable $nextScheduledScan = null,
	) {
	}
}
