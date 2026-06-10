<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Used only for ECMP routes.
 */
readonly class MagicStaticRoutesCreateRoutesRequestScope
{
	public function __construct(
		/** List of colo names for the ECMP scope. */
		public ?array $coloNames = null,
		/** List of colo regions for the ECMP scope. */
		public ?array $coloRegions = null,
	) {
	}
}
