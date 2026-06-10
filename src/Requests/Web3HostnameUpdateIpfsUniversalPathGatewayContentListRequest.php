<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update IPFS Universal Path Gateway Content List
 */
readonly class Web3HostnameUpdateIpfsUniversalPathGatewayContentListRequest
{
	public function __construct(
		/** Behavior of the content list. */
		public \FoundryCo\Cloudflare\Enums\Web3HostnameUpdateIpfsUniversalPathGatewayContentListRequestAction $action,
		/** Provides content list entries. */
		public array $entries,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'action' => $this->action->value,
		    'entries' => $this->entries,
		], fn ($v) => $v !== null);
	}
}
