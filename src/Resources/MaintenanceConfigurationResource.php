<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MaintenanceConfigurationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get catalog maintenance configuration
	 */
	public function get(string $bucketName): \FoundryCo\Cloudflare\Responses\MaintenanceConfigurationConfig
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2-catalog/' . $bucketName . '/maintenance-configs', \FoundryCo\Cloudflare\Responses\MaintenanceConfigurationConfig::class, []);
	}


	/**
	 * Update catalog maintenance configuration
	 */
	public function create(
		string $bucketName,
		\FoundryCo\Cloudflare\Requests\UpdateMaintenanceConfigRequest $request,
	): \FoundryCo\Cloudflare\Responses\MaintenanceConfigurationConfig
	{
		return $this->client->post('/accounts/' . $this->accountId . '/r2-catalog/' . $bucketName . '/maintenance-configs', \FoundryCo\Cloudflare\Responses\MaintenanceConfigurationConfig::class, $request);
	}
}
