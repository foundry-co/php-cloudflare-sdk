<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit Web3 Hostname
 */
readonly class Web3HostnameEditWeb3HostnameRequest
{
	public function __construct(
		/** Specify an optional description of the hostname. */
		public ?string $description = null,
		/** Specify the DNSLink value used if the target is ipfs. */
		public ?string $dnslink = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'dnslink' => $this->dnslink,
		], fn ($v) => $v !== null);
	}
}
