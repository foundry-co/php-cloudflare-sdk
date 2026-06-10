<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/ip-profiles', \FoundryCo\Cloudflare\Responses\ListIpProfiles::class, ['perPage' => $perPage ?? null]);
	}


	/**
	 * Create IP profile
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CreateIpProfileRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/devices/ip-profiles', \FoundryCo\Cloudflare\Responses\CreateIpProfile::class, $request);
	}


	/**
	 * Get IP profile
	 */
	public function get(string $profileId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/ip-profiles/' . $profileId, \FoundryCo\Cloudflare\Responses\GetIpProfile::class, []);
	}


	/**
	 * Update IP profile
	 */
	public function update(string $profileId, \FoundryCo\Cloudflare\Requests\UpdateIpProfileRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/devices/ip-profiles/' . $profileId, \FoundryCo\Cloudflare\Responses\UpdateIpProfile::class, $request);
	}


	/**
	 * Delete IP profile
	 */
	public function delete(string $profileId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/devices/ip-profiles/' . $profileId);
	}
}
