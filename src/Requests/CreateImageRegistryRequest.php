<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Add a new image registry configuration
 */
readonly class CreateImageRegistryRequest
{
	public function __construct(
		/** A string representation of a domain name. See RFC-1034 (https://www.ietf.org/rfc/rfc1034.txt). Consider that the limit of a domain name is min 3 and max 253 ASCII characters. */
		public string $domain,
		/** Credentials needed to authenticate with an external image registry. */
		public ?\FoundryCo\Cloudflare\Responses\CreateImageRegistryRequestAuth $auth = null,
		/** If you own the registry and is private, this should be false or not defined. If it's a public registry like docker.io, you should set this to true */
		public ?bool $isPublic = null,
		/** The type of external registry that is being configured. */
		public ?\FoundryCo\Cloudflare\Enums\CreateImageRegistryRequestKind $kind = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'domain' => $this->domain,
		    'auth' => $this->auth?->toArray(),
		    'is_public' => $this->isPublic,
		    'kind' => $this->kind?->value,
		], fn ($v) => $v !== null);
	}
}
