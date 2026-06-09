<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create OAuth Client
 */
readonly class OauthClientsCreateRequest
{
	public function __construct(
		/** Human-readable name of the OAuth client. */
		public string $clientName,
		/** Array of OAuth grant types the client is allowed to use. `authorization_code` is required; `refresh_token` may be included optionally. */
		public array $grantTypes,
		/** Array of allowed redirect URIs for the client. */
		public array $redirectUris,
		/** Array of OAuth response types the client is allowed to use. */
		public array $responseTypes,
		/** Array of OAuth scopes the client is allowed to request. Colon-delimited scopes are not accepted. Dot-delimited scopes are validated against available OAuth API scopes; simple identity scopes are allowed. Protocol scopes `offline_access` and `openid` are added or removed automatically based on `grant_types` and `response_types`. */
		public array $scopes,
		/** The authentication method the client uses at the token endpoint. */
		public \FoundryCo\Cloudflare\Enums\OauthClientsCreateRequestTokenEndpointAuthMethod $tokenEndpointAuthMethod,
		/** Array of allowed CORS origins. */
		public ?array $allowedCorsOrigins = null,
		/** URL of the home page of the client. */
		public ?string $clientUri = null,
		/** URL of the client's logo. */
		public ?string $logoUri = null,
		/** URL that points to a privacy policy document. */
		public ?string $policyUri = null,
		/** Array of allowed post-logout redirect URIs. */
		public ?array $postLogoutRedirectUris = null,
		/** URL that points to a terms of service document. */
		public ?string $tosUri = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'client_name' => $this->clientName,
		    'grant_types' => $this->grantTypes->value,
		    'redirect_uris' => $this->redirectUris,
		    'response_types' => $this->responseTypes->value,
		    'scopes' => $this->scopes,
		    'token_endpoint_auth_method' => $this->tokenEndpointAuthMethod->value,
		    'allowed_cors_origins' => $this->allowedCorsOrigins,
		    'client_uri' => $this->clientUri,
		    'logo_uri' => $this->logoUri,
		    'policy_uri' => $this->policyUri,
		    'post_logout_redirect_uris' => $this->postLogoutRedirectUris,
		    'tos_uri' => $this->tosUri,
		], fn ($v) => $v !== null);
	}
}
