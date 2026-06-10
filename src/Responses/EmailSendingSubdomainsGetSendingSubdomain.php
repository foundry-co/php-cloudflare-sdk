<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSendingSubdomainsGetSendingSubdomain
{
	public function __construct(
		/** Whether Email Sending is enabled on this subdomain. */
		public ?bool $enabled = null,
		/** The subdomain domain name. */
		public ?string $name = null,
		/** Sending subdomain identifier. */
		public ?string $tag = null,
		/** The date and time the destination address has been created. */
		public ?\DateTimeImmutable $created = null,
		/** The DKIM selector used for email signing. */
		public ?string $dkimSelector = null,
		/** The date and time the destination address was last modified. */
		public ?\DateTimeImmutable $modified = null,
		/** The return-path domain used for bounce handling. */
		public ?string $returnPathDomain = null,
	) {
	}
}
