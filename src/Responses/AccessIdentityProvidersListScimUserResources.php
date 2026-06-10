<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessIdentityProvidersListScimUserResources
{
	public function __construct(
		/** Determines the status of the SCIM User resource. */
		public ?bool $active = null,
		/** The name of the SCIM User resource. */
		public ?string $displayName = null,
		public ?array $emails = null,
		/** The IdP-generated Id of the SCIM resource. */
		public ?string $externalId = null,
		/** The unique Cloudflare-generated Id of the SCIM resource. */
		public ?string $id = null,
		/** The metadata of the SCIM resource. */
		public ?AccessIdentityProvidersListScimUserResourcesMeta $meta = null,
		/** The list of URIs which indicate the attributes contained within a SCIM resource. */
		public ?array $schemas = null,
	) {
	}
}
