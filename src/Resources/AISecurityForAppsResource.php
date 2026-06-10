<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AISecurityForAppsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get AI Security for Apps Custom Topics
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/ai-security/custom-topics', \FoundryCo\Cloudflare\Responses\AiSecurityCustomTopicsGet::class, []);
	}


	/**
	 * Set AI Security for Apps Custom Topics
	 */
	public function update(\FoundryCo\Cloudflare\Requests\AiSecurityCustomTopicsPutRequest $request): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/ai-security/custom-topics', \FoundryCo\Cloudflare\Responses\AiSecurityCustomTopicsPut::class, $request);
	}


	/**
	 * Get AI Security for Apps Status
	 */
	public function settings(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/ai-security/settings', \FoundryCo\Cloudflare\Responses\AiSecuritySettingsGet::class, []);
	}


	/**
	 * Set AI Security for Apps Status
	 */
	public function aiSecuritySettingsPut(\FoundryCo\Cloudflare\Requests\AiSecuritySettingsPutRequest $request): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/ai-security/settings', \FoundryCo\Cloudflare\Responses\AiSecuritySettingsPut::class, $request);
	}
}
