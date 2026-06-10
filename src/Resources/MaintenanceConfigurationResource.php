<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function get(string $bucketName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2-catalog/' . $bucketName . '/maintenance-configs', \FoundryCo\Cloudflare\Responses\GetMaintenanceConfig::class, []);
	}


	/**
	 * Update catalog maintenance configuration
	 */
	public function create(
		string $bucketName,
		\FoundryCo\Cloudflare\Requests\UpdateMaintenanceConfigRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/r2-catalog/' . $bucketName . '/maintenance-configs', \FoundryCo\Cloudflare\Responses\UpdateMaintenanceConfig::class, $request);
	}
}
