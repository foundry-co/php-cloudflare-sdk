<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Web3 Hostname
 */
readonly class Web3HostnameCreateWeb3HostnameRequest
{
	public function __construct(
		/** Specify the hostname that points to the target gateway via CNAME. */
		public string $name,
		/** Specify the target gateway of the hostname. */
		public \FoundryCo\Cloudflare\Enums\Web3HostnameCreateWeb3HostnameRequestTarget $target,
		/** Specify an optional description of the hostname. */
		public ?string $description = null,
		/** Specify the DNSLink value used if the target is ipfs. */
		public ?string $dnslink = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'target' => $this->target->value,
		    'description' => $this->description,
		    'dnslink' => $this->dnslink,
		], fn ($v) => $v !== null);
	}
}
