<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class Web3HostnameListWeb3Hostnames
{
	public function __construct(
		public ?\DateTimeImmutable $createdOn = null,
		/** Specify an optional description of the hostname. */
		public ?string $description = null,
		/** Specify the DNSLink value used if the target is ipfs. */
		public ?string $dnslink = null,
		/** Specify the identifier of the hostname. */
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedOn = null,
		/** Specify the hostname that points to the target gateway via CNAME. */
		public ?string $name = null,
		/** Specifies the status of the hostname's activation. */
		public ?\FoundryCo\Cloudflare\Enums\Web3HostnameListWeb3HostnamesStatus $status = null,
		/** Specify the target gateway of the hostname. */
		public ?\FoundryCo\Cloudflare\Enums\Web3HostnameListWeb3HostnamesTarget $target = null,
	) {
	}
}
