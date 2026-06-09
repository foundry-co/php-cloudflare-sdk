<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class R2CatalogManagementResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List R2 catalogs
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\R2CatalogManagementCatalogs
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2-catalog', \FoundryCo\Cloudflare\Responses\R2CatalogManagementCatalogs::class, []);
	}


	/**
	 * Get R2 catalog details
	 */
	public function get(string $bucketName): \FoundryCo\Cloudflare\Responses\R2CatalogManagementDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2-catalog/' . $bucketName, \FoundryCo\Cloudflare\Responses\R2CatalogManagementDetails::class, []);
	}


	/**
	 * Disable R2 catalog
	 */
	public function create(string $bucketName): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/r2-catalog/' . $bucketName . '/disable', null, null);
	}


	/**
	 * Enable R2 bucket as a catalog
	 */
	public function enable(string $bucketName): \FoundryCo\Cloudflare\Responses\R2CatalogManagementCatalog
	{
		return $this->client->post('/accounts/' . $this->accountId . '/r2-catalog/' . $bucketName . '/enable', \FoundryCo\Cloudflare\Responses\R2CatalogManagementCatalog::class, null);
	}
}
