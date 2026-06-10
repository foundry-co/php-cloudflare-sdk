<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailRoutingDestinationAddressesGetADestinationAddress
{
	public function __construct(
		/** The date and time the destination address has been created. */
		public ?\DateTimeImmutable $created = null,
		/** The contact email address of the user. */
		public ?string $email = null,
		/** Destination address identifier. */
		public ?string $id = null,
		/** The date and time the destination address was last modified. */
		public ?\DateTimeImmutable $modified = null,
		/** Destination address tag. (Deprecated, replaced by destination address identifier) */
		public ?string $tag = null,
		/** The date and time the destination address has been verified. Null means not verified yet. */
		public ?\DateTimeImmutable $verified = null,
	) {
	}
}
