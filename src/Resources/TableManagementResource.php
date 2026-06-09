<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class TableManagementResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List tables in namespace
	 */
	public function get(
		string $bucketName,
		string $namespace,
		?string $pageToken = null,
		?int $pageSize = null,
		?bool $returnUuids = null,
		?bool $returnDetails = null,
	): \FoundryCo\Cloudflare\Responses\TableManagementTables
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2-catalog/' . $bucketName . '/namespaces/' . $namespace . '/tables', \FoundryCo\Cloudflare\Responses\TableManagementTables::class, ['pageToken' => $pageToken ?? null, 'pageSize' => $pageSize ?? null, 'returnUuids' => $returnUuids ?? null, 'returnDetails' => $returnDetails ?? null]);
	}
}
