<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Modify stored information about a CNI object
 */
readonly class UpdateCniRequest
{
	public function __construct(
		/** Customer account tag */
		public string $account,
		/**
		 * Customer end of the point-to-point link
		 *
		 * This should always be inside the same prefix as `p2p_ip`.
		 */
		public string $custIp,
		public string $id,
		/** Interconnect identifier hosting this CNI */
		public string $interconnect,
		public \FoundryCo\Cloudflare\Responses\UpdateCniRequestMagic $magic,
		/** Cloudflare end of the point-to-point link */
		public string $p2pIp,
		public ?\FoundryCo\Cloudflare\Responses\UpdateCniRequestBgp $bgp = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'account' => $this->account,
		    'cust_ip' => $this->custIp,
		    'id' => $this->id,
		    'interconnect' => $this->interconnect,
		    'magic' => $this->magic->toArray(),
		    'p2p_ip' => $this->p2pIp,
		    'bgp' => $this->bgp?->toArray(),
		], fn ($v) => $v !== null);
	}
}
