<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccessApplicationsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Access Applications
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/apps', null, []);
	}


	/**
	 * Add an Access application
	 */
	public function create(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/access/apps', null, null);
	}


	/**
	 * Get an Access application
	 */
	public function get(mixed $appId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/apps/' . $appId, null, []);
	}


	/**
	 * Update an Access application
	 */
	public function update(mixed $appId): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/access/apps/' . $appId, null, null);
	}


	/**
	 * Delete an Access application
	 */
	public function delete(mixed $appId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/access/apps/' . $appId);
	}


	/**
	 * Revoke application tokens
	 */
	public function revokeTokens(mixed $appId): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/access/apps/' . $appId . '/revoke_tokens', null, null);
	}


	/**
	 * Update application settings
	 */
	public function settings(
		mixed $appId,
		\FoundryCo\Cloudflare\Requests\ZoneLevelAccessApplicationsPutUpdateAccessApplicationSettingsRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/access/apps/' . $appId . '/settings', null, $request);
	}


	/**
	 * Update application settings
	 */
	public function zoneLevelAccessApplicationsPatchUpdateAccessApplicationSettings(
		mixed $appId,
		\FoundryCo\Cloudflare\Requests\ZoneLevelAccessApplicationsPatchUpdateAccessApplicationSettingsRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/access/apps/' . $appId . '/settings', null, $request);
	}


	/**
	 * Test Access policies
	 */
	public function userPolicyChecks(mixed $appId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/apps/' . $appId . '/user_policy_checks', \FoundryCo\Cloudflare\Responses\ZoneLevelAccessApplicationsTestAccessPolicies::class, []);
	}
}
