<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DLPProfilesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List all profiles
	 */
	public function list(?bool $all = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/profiles', null, ['all' => $all ?? null]);
	}


	/**
	 * List all custom profiles
	 */
	public function custom(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/profiles/custom', \FoundryCo\Cloudflare\Responses\DlpProfilesListAllCustomProfiles::class, []);
	}


	/**
	 * Create custom profile
	 */
	public function create(\FoundryCo\Cloudflare\Requests\DlpProfilesCreateCustomProfilesRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/profiles/custom', null, $request);
	}


	/**
	 * Get custom profile
	 */
	public function get(string $profileId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/profiles/custom/' . $profileId, null, []);
	}


	/**
	 * Update custom profile
	 */
	public function update(
		string $profileId,
		\FoundryCo\Cloudflare\Requests\DlpProfilesUpdateCustomProfileRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/profiles/custom/' . $profileId, null, $request);
	}


	/**
	 * Delete custom profile
	 */
	public function delete(string $profileId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/profiles/custom/' . $profileId);
	}


	/**
	 * Create predefined profile
	 */
	public function predefined(\FoundryCo\Cloudflare\Requests\DlpProfilesCreatePredefinedProfileRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/profiles/predefined', null, $request);
	}


	/**
	 * Get predefined profile
	 */
	public function dlpProfilesGetPredefinedProfile(string $profileId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/profiles/predefined/' . $profileId, null, []);
	}


	/**
	 * Update predefined profile
	 */
	public function dlpProfilesUpdatePredefinedProfile(
		string $profileId,
		\FoundryCo\Cloudflare\Requests\DlpProfilesUpdatePredefinedProfileRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/profiles/predefined/' . $profileId, null, $request);
	}


	/**
	 * Delete predefined profile
	 */
	public function dlpProfilesDeletePredefinedProfile(string $profileId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/profiles/predefined/' . $profileId);
	}


	/**
	 * Get predefined profile config
	 */
	public function config(string $profileId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/profiles/predefined/' . $profileId . '/config', \FoundryCo\Cloudflare\Responses\DlpProfilesGetPredefinedProfileConfig::class, []);
	}


	/**
	 * Create predefined profile
	 */
	public function dlpProfilesCreatePredefinedProfileConfig(
		string $profileId,
		\FoundryCo\Cloudflare\Requests\DlpProfilesCreatePredefinedProfileConfigRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/profiles/predefined/' . $profileId . '/config', \FoundryCo\Cloudflare\Responses\DlpProfilesCreatePredefinedProfileConfig::class, $request);
	}


	/**
	 * Update predefined profile config
	 */
	public function dlpProfilesUpdatePredefinedProfileConfig(
		string $profileId,
		\FoundryCo\Cloudflare\Requests\DlpProfilesUpdatePredefinedProfileConfigRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/profiles/predefined/' . $profileId . '/config', \FoundryCo\Cloudflare\Responses\DlpProfilesUpdatePredefinedProfileConfig::class, $request);
	}


	/**
	 * Get DLP Profile
	 */
	public function profiles(string $profileId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/profiles/' . $profileId, null, []);
	}
}
