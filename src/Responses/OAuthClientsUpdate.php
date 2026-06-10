<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class OauthClientsUpdate
{
	public function __construct(
		public mixed $clientId = null,
		/** Visibility of the OAuth client. */
		public ?\FoundryCo\Cloudflare\Enums\OauthClientsUpdateVisibility $visibility = null,
		/** Array of allowed CORS origins. */
		public ?array $allowedCorsOrigins = null,
		/** Human-readable name of the OAuth client. */
		public ?string $clientName = null,
		/** URL of the home page of the client. */
		public ?string $clientUri = null,
		/** Array of OAuth grant types the client is allowed to use. `authorization_code` is required; `refresh_token` may be included optionally. */
		public ?array $grantTypes = null,
		/** URL of the client's logo. */
		public ?string $logoUri = null,
		/** URL that points to a privacy policy document. */
		public ?string $policyUri = null,
		/** Array of allowed post-logout redirect URIs. */
		public ?array $postLogoutRedirectUris = null,
		/** Array of allowed redirect URIs for the client. */
		public ?array $redirectUris = null,
		/** Array of OAuth response types the client is allowed to use. */
		public ?array $responseTypes = null,
		/** Array of OAuth scopes the client is allowed to request. Colon-delimited scopes are not accepted. Dot-delimited scopes are validated against available OAuth API scopes; simple identity scopes are allowed. Protocol scopes `offline_access` and `openid` are added or removed automatically based on `grant_types` and `response_types`. */
		public ?array $scopes = null,
		/** The authentication method the client uses at the token endpoint. */
		public ?\FoundryCo\Cloudflare\Enums\OauthClientsUpdateTokenEndpointAuthMethod $tokenEndpointAuthMethod = null,
		/** URL that points to a terms of service document. */
		public ?string $tosUri = null,
		/** Client URI domain control verification state. */
		public ?OauthClientsUpdateClientUriVerification $clientUriVerification = null,
		/** Timestamp when the OAuth client was created. */
		public ?\DateTimeImmutable $createdAt = null,
		/** Indicates whether the client has a rotated secret that has not yet been deleted. */
		public ?bool $hasRotatedSecret = null,
		/** Timestamp when the OAuth client was promoted to public visibility. */
		public ?\DateTimeImmutable $promotedAt = null,
		/** Timestamp when the OAuth client was last updated. */
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
