<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Add buckets for full packet captures
 */
readonly class MagicPcapCollectionAddBucketsForFullPacketCapturesRequest
{
	public function __construct(
		/** The full URI for the bucket. This field only applies to `full` packet captures. */
		public string $destinationConf,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'destination_conf' => $this->destinationConf,
		], fn ($v) => $v !== null);
	}
}
