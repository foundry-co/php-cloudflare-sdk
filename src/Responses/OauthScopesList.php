<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * An available OAuth scope that can be assigned to an OAuth client.
 */
readonly class OauthScopesList
{
	public function __construct(
		/** The scope label to use in the scopes array when creating or updating an OAuth client. */
		public ?string $id = null,
		/** Human-readable name of the OAuth scope. */
		public ?string $name = null,
		/** Category for grouping scopes in the UI. */
		public ?string $category = null,
		/** The underlying resource scopes (Bach scopes) that define which resources this OAuth scope can act upon. */
		public ?array $scopes = null,
	) {
	}
}
