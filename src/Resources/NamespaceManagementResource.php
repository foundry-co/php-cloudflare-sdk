<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class NamespaceManagementResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List namespaces in catalog
	 */
	public function get(
		string $bucketName,
		?string $pageToken = null,
		?int $pageSize = null,
		?string $parent = null,
		?bool $returnUuids = null,
		?bool $returnDetails = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2-catalog/' . $bucketName . '/namespaces', \FoundryCo\Cloudflare\Responses\ListNamespaces::class, ['pageToken' => $pageToken ?? null, 'pageSize' => $pageSize ?? null, 'parent' => $parent ?? null, 'returnUuids' => $returnUuids ?? null, 'returnDetails' => $returnDetails ?? null]);
	}
}
