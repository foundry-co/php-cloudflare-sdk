<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Replace label(s) on an operation in endpoint management
 */
readonly class ApiShieldOperationsPutLabelsToOperationRequest
{
	public function __construct(
		/** List of managed label names. Omitting this property or passing an empty array will result in all managed labels being removed from the operation */
		public ?array $managed = null,
		/** List of user label names. Omitting this property or passing an empty array will result in all user labels being removed from the operation */
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
