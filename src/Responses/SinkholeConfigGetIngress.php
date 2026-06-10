<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SinkholeConfigGetIngress
{
	public function __construct(
		/** The CIDR block for the ingress rule. */
		public ?string $cidr = null,
		/** The date and time when the ingress rule was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** The unique identifier for the ingress rule. */
		public ?string $id = null,
		/** The date and time when the ingress rule was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** The sinkhole this ingress rule belongs to. */
		public ?string $sinkholeId = null,
		/** The zone tag associated with this ingress rule. */
		public ?string $zoneTag = null,
	) {
	}
}
