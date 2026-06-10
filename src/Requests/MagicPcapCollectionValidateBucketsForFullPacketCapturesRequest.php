<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Validate buckets for full packet captures
 */
readonly class MagicPcapCollectionValidateBucketsForFullPacketCapturesRequest
{
	public function __construct(
		/** The full URI for the bucket. This field only applies to `full` packet captures. */
		public string $destinationConf,
		/** The ownership challenge filename stored in the bucket. */
		public string $ownershipChallenge,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'destination_conf' => $this->destinationConf,
		    'ownership_challenge' => $this->ownershipChallenge,
		], fn ($v) => $v !== null);
	}
}
