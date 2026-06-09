<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specify a content list entry to block.
 */
readonly class Web3HostnameEntry
{
	public function __construct(
		/** Specify the CID or content path of content to block. */
		public ?string $content = null,
		public ?\DateTimeImmutable $createdOn = null,
		/** Specify an optional description of the content list entry. */
		public ?string $description = null,
		/** Specify the identifier of the hostname. */
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedOn = null,
		/** Specify the type of content list entry to block. */
		public ?\FoundryCo\Cloudflare\Enums\Web3HostnameEntryType $type = null,
	) {
	}
}
