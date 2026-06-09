<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Patch Automatic SSL/TLS Enrollment status for given zone
 */
readonly class SslDetectorAutomaticModePatchEnrollmentRequest
{
	public function __construct(
		/** Controls enablement of Automatic SSL/TLS. */
		public \FoundryCo\Cloudflare\Enums\SslDetectorAutomaticModePatchEnrollmentRequestValue $value,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'value' => $this->value->value,
		], fn ($v) => $v !== null);
	}
}
