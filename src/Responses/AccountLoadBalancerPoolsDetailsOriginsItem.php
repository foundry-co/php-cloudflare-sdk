<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountLoadBalancerPoolsDetailsOriginsItem
{
	public function __construct(
		public ?array $address = null,
		public ?array $disabledAt = null,
		public ?array $enabled = null,
		public ?array $flattenCname = null,
		public ?array $header = null,
		public ?array $name = null,
		public ?array $port = null,
		public ?array $virtualNetworkId = null,
		public ?array $weight = null,
	) {
	}
}
