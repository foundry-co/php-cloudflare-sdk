<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * An image registry added in a customer account
 */
readonly class CreateImageRegistry
{
	public function __construct(
		/** UTC timestamp string in ISO 8601 format */
		public ?string $createdAt = null,
		/** A string representation of a domain name. See RFC-1034 (https://www.ietf.org/rfc/rfc1034.txt). Consider that the limit of a domain name is min 3 and max 253 ASCII characters. */
		public ?string $domain = null,
		/** The type of registry that is being configured. */
		public ?\FoundryCo\Cloudflare\Enums\CreateImageRegistryKind $kind = null,
		/** A reference to a secret stored in Secrets Store */
		public ?CreateImageRegistryPrivateCredential $privateCredential = null,
		/** A base64 representation of the public key that you can set to configure the registry. If null, the registry is public and doesn't have authentication setup with Cloudchamber */
		public ?string $publicKey = null,
	) {
	}
}
