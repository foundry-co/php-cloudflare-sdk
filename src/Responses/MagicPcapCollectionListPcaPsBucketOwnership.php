<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicPcapCollectionListPcaPsBucketOwnership
{
	public function __construct(
		/** The full URI for the bucket. This field only applies to `full` packet captures. */
		public ?string $destinationConf = null,
		/** The ownership challenge filename stored in the bucket. */
		public ?string $filename = null,
		/** The bucket ID associated with the packet captures API. */
		public ?string $id = null,
		/** The status of the ownership challenge. Can be pending, success or failed. */
		public ?\FoundryCo\Cloudflare\Enums\MagicPcapCollectionListPcaPsBucketOwnershipStatus $status = null,
		/** The RFC 3339 timestamp when the bucket was added to packet captures API. */
		public ?string $submitted = null,
		/** The RFC 3339 timestamp when the bucket was validated. */
		public ?string $validated = null,
	) {
	}
}
