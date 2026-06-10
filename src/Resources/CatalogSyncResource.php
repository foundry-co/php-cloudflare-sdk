<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CatalogSyncResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Catalog Syncs
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cloud/catalog-syncs', \FoundryCo\Cloudflare\Responses\CatalogSyncsList::class, []);
	}


	/**
	 * Create Catalog Sync
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CatalogSyncsCreateRequest $request,
		?string $forwarded = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/cloud/catalog-syncs', \FoundryCo\Cloudflare\Responses\CatalogSyncsCreate::class, $request);
	}


	/**
	 * List Prebuilt Policies
	 */
	public function prebuiltPolicies(
		?\FoundryCo\Cloudflare\Enums\CatalogSyncDestinationType $destinationType = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cloud/catalog-syncs/prebuilt-policies', \FoundryCo\Cloudflare\Responses\CatalogSyncsPrebuiltPoliciesList::class, ['destinationType' => $destinationType ?? null]);
	}


	/**
	 * Read Catalog Sync
	 */
	public function get(string $syncId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cloud/catalog-syncs/' . $syncId, \FoundryCo\Cloudflare\Responses\CatalogSyncsRead::class, []);
	}


	/**
	 * Update Catalog Sync
	 */
	public function update(string $syncId, \FoundryCo\Cloudflare\Requests\CatalogSyncsUpdateRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/cloud/catalog-syncs/' . $syncId, \FoundryCo\Cloudflare\Responses\CatalogSyncsUpdate::class, $request);
	}


	/**
	 * Patch Catalog Sync
	 */
	public function catalogSyncs(string $syncId, \FoundryCo\Cloudflare\Requests\CatalogSyncsPatchRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/cloud/catalog-syncs/' . $syncId, \FoundryCo\Cloudflare\Responses\CatalogSyncsPatch::class, $request);
	}


	/**
	 * Delete Catalog Sync
	 */
	public function delete(string $syncId, ?bool $deleteDestination = null): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/cloud/catalog-syncs/' . $syncId);
	}


	/**
	 * Run Catalog Sync
	 */
	public function refresh(string $syncId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/cloud/catalog-syncs/' . $syncId . '/refresh', null, null);
	}
}
