<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSendingSubdomainsSubdomain
{
	public function __construct(
		/** Whether Email Sending is enabled on this subdomain. */
		public bool $enabled,
		/** The subdomain domain name. */
		public string $name,
		/** Sending subdomain identifier. */
		public string $tag,
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
