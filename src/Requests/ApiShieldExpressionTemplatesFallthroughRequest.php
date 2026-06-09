<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Generate fallthrough WAF expression template from a set of API hosts
 */
readonly class ApiShieldExpressionTemplatesFallthroughRequest
{
	public function __construct(
		/** List of hosts to be targeted in the expression */
		public array $hosts,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'hosts' => $this->hosts,
		], fn ($v) => $v !== null);
	}
}
