<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustOrganizationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get your Zero Trust organization
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\ZoneLevelZeroTrustOrganizationOrganization
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/organizations', \FoundryCo\Cloudflare\Responses\ZoneLevelZeroTrustOrganizationOrganization::class, []);
	}


	/**
	 * Create your Zero Trust organization
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\ZoneLevelZeroTrustOrganizationCreateYourZeroTrustOrganizationRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneLevelZeroTrustOrganizationOrganization
	{
		return $this->client->post('/zones/' . $this->zoneId . '/access/organizations', \FoundryCo\Cloudflare\Responses\ZoneLevelZeroTrustOrganizationOrganization::class, $request);
	}


	/**
	 * Update your Zero Trust organization
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ZoneLevelZeroTrustOrganizationUpdateYourZeroTrustOrganizationRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneLevelZeroTrustOrganizationOrganization
	{
		return $this->client->put('/zones/' . $this->zoneId . '/access/organizations', \FoundryCo\Cloudflare\Responses\ZoneLevelZeroTrustOrganizationOrganization::class, $request);
	}


	/**
	 * Revoke all Access tokens for a user
	 */
	public function revokeUser(
		\FoundryCo\Cloudflare\Requests\ZoneLevelZeroTrustOrganizationRevokeAllAccessTokensForAUserRequest $request,
	): \FoundryCo\Cloudflare\Enums\ZoneLevelZeroTrustOrganizationUser
	{
		return $this->client->post('/zones/' . $this->zoneId . '/access/organizations/revoke_user', \FoundryCo\Cloudflare\Enums\ZoneLevelZeroTrustOrganizationUser::class, $request);
	}
}
