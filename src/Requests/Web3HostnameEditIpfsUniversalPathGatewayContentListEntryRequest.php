<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit IPFS Universal Path Gateway Content List Entry
 */
readonly class Web3HostnameEditIpfsUniversalPathGatewayContentListEntryRequest
{
	public function __construct(
		/** Specify the CID or content path of content to block. */
		public string $content,
		/** Specify the type of content list entry to block. */
		public \FoundryCo\Cloudflare\Enums\Web3HostnameEditIpfsUniversalPathGatewayContentListEntryRequestType $type,
		/** Specify an optional description of the content list entry. */
		public ?string $description = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'content' => $this->content,
		    'type' => $this->type->value,
		    'description' => $this->description,
		], fn ($v) => $v !== null);
	}
}
