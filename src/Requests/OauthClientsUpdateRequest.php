<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update OAuth Client
 */
readonly class OauthClientsUpdateRequest
{
	public function __construct(
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
		public ?\FoundryCo\Cloudflare\Enums\OauthClientsUpdateRequestTokenEndpointAuthMethod $tokenEndpointAuthMethod = null,
		/** URL that points to a terms of service document. */
		public ?string $tosUri = null,
		/** Promote the OAuth client from private to public visibility. Only `public` is accepted; demotion to `private` is not supported. Promotion requires a non-empty client name, logo URI, verified client URI host, and at least one non-identity scope. */
		public ?\FoundryCo\Cloudflare\Enums\OauthClientsUpdateRequestVisibility $visibility = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'allowed_cors_origins' => $this->allowedCorsOrigins,
		    'client_name' => $this->clientName,
		    'client_uri' => $this->clientUri,
		    'grant_types' => $this->grantTypes?->value,
		    'logo_uri' => $this->logoUri,
		    'policy_uri' => $this->policyUri,
		    'post_logout_redirect_uris' => $this->postLogoutRedirectUris,
		    'redirect_uris' => $this->redirectUris,
		    'response_types' => $this->responseTypes?->value,
		    'scopes' => $this->scopes,
		    'token_endpoint_auth_method' => $this->tokenEndpointAuthMethod?->value,
		    'tos_uri' => $this->tosUri,
		    'visibility' => $this->visibility?->value,
		], fn ($v) => $v !== null);
	}
}
