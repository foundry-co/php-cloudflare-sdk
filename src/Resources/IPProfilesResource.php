<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class IPProfilesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List IP profiles
	 */
	public function list(?int $perPage = null): \FoundryCo\Cloudflare\Responses\IPProfilesProfiles
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/ip-profiles', \FoundryCo\Cloudflare\Responses\IPProfilesProfiles::class, ['perPage' => $perPage ?? null]);
	}


	/**
	 * Create IP profile
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CreateIpProfileRequest $request,
	): \FoundryCo\Cloudflare\Responses\IPProfilesProfile
	{
		return $this->client->post('/accounts/' . $this->accountId . '/devices/ip-profiles', \FoundryCo\Cloudflare\Responses\IPProfilesProfile::class, $request);
	}


	/**
	 * Get IP profile
	 */
	public function get(string $profileId): \FoundryCo\Cloudflare\Responses\IPProfilesProfile
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/ip-profiles/' . $profileId, \FoundryCo\Cloudflare\Responses\IPProfilesProfile::class, []);
	}


	/**
	 * Update IP profile
	 */
	public function update(
		string $profileId,
		\FoundryCo\Cloudflare\Requests\UpdateIpProfileRequest $request,
	): \FoundryCo\Cloudflare\Responses\IPProfilesProfile
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/devices/ip-profiles/' . $profileId, \FoundryCo\Cloudflare\Responses\IPProfilesProfile::class, $request);
	}


	/**
	 * Delete IP profile
	 */
	public function delete(string $profileId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/devices/ip-profiles/' . $profileId);
	}
}
