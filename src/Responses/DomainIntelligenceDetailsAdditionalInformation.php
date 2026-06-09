<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Additional information related to the host name.
 */
readonly class DomainIntelligenceDetailsAdditionalInformation
{
	public function __construct(
		/** Suspected DGA malware family. */
		public ?string $suspectedMalwareFamily = null,
	) {
	}
}
