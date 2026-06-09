<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\AISecurityForAppsGet
	{
		return $this->client->get('/zones/' . $this->zoneId . '/ai-security/custom-topics', \FoundryCo\Cloudflare\Responses\AISecurityForAppsGet::class, []);
	}


	/**
	 * Set AI Security for Apps Custom Topics
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\AiSecurityCustomTopicsPutRequest $request,
	): \FoundryCo\Cloudflare\Responses\AISecurityForAppsPut
	{
		return $this->client->put('/zones/' . $this->zoneId . '/ai-security/custom-topics', \FoundryCo\Cloudflare\Responses\AISecurityForAppsPut::class, $request);
	}


	/**
	 * Get AI Security for Apps Status
	 */
	public function settings(): \FoundryCo\Cloudflare\Responses\AISecurityForAppsGet
	{
		return $this->client->get('/zones/' . $this->zoneId . '/ai-security/settings', \FoundryCo\Cloudflare\Responses\AISecurityForAppsGet::class, []);
	}


	/**
	 * Set AI Security for Apps Status
	 */
	public function aiSecuritySettingsPut(
		\FoundryCo\Cloudflare\Requests\AiSecuritySettingsPutRequest $request,
	): \FoundryCo\Cloudflare\Responses\AISecurityForAppsPut
	{
		return $this->client->put('/zones/' . $this->zoneId . '/ai-security/settings', \FoundryCo\Cloudflare\Responses\AISecurityForAppsPut::class, $request);
	}
}
