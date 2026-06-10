<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new CNI object
 */
readonly class CreateCniRequest
{
	public function __construct(
		/** Customer account tag */
		public string $account,
		public string $interconnect,
		public \FoundryCo\Cloudflare\Responses\CreateCniRequestMagic $magic,
		public ?\FoundryCo\Cloudflare\Responses\CreateCniRequestBgp $bgp = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'account' => $this->account,
		    'interconnect' => $this->interconnect,
		    'magic' => $this->magic->toArray(),
		    'bgp' => $this->bgp?->toArray(),
		], fn ($v) => $v !== null);
	}
}
