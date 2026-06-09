<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PerHostnameAuthenticatedOriginPullAssociations
{
	public function __construct(
		/** Certificate identifier tag. */
		public ?string $certId = null,
		/** The time when the certificate was created. */
		public ?\DateTimeImmutable $createdAt = null,
		/** Indicates whether hostname-level authenticated origin pulls is enabled. A null value voids the association. */
		public ?bool $enabled = null,
		/** The hostname on the origin for which the client certificate uploaded will be used. */
		public ?string $hostname = null,
		/** Status of the certificate or the association. */
		public ?\FoundryCo\Cloudflare\Enums\PerHostnameAuthenticatedOriginPullAssociationsStatus $status = null,
		/** The time when the certificate was updated. */
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
