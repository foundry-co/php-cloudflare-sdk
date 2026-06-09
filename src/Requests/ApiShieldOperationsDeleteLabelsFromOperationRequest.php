<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Remove label(s) on an operation in endpoint management
 */
readonly class ApiShieldOperationsDeleteLabelsFromOperationRequest
{
	public function __construct(
		/** List of managed label names. */
		public ?array $managed = null,
		/** List of user label names. */
		public ?array $user = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'managed' => $this->managed,
		    'user' => $this->user,
		], fn ($v) => $v !== null);
	}
}
