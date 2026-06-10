<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class TableMaintenanceConfigurationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get table maintenance configuration
	 */
	public function get(string $bucketName, string $namespace, string $tableName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2-catalog/' . $bucketName . '/namespaces/' . $namespace . '/tables/' . $tableName . '/maintenance-configs', \FoundryCo\Cloudflare\Responses\GetTableMaintenanceConfig::class, []);
	}


	/**
	 * Update table maintenance configuration
	 */
	public function create(
		string $bucketName,
		string $namespace,
		string $tableName,
		\FoundryCo\Cloudflare\Requests\UpdateTableMaintenanceConfigRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/r2-catalog/' . $bucketName . '/namespaces/' . $namespace . '/tables/' . $tableName . '/maintenance-configs', \FoundryCo\Cloudflare\Responses\UpdateTableMaintenanceConfig::class, $request);
	}
}
