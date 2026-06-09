<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ResourceTaggingResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get tags for an account-level resource
	 */
	public function list(
		?string $resourceId = null,
		?\FoundryCo\Cloudflare\Enums\ResourceTaggingResourceType $resourceType = null,
		?string $workerId = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/tags', null, ['resourceId' => $resourceId ?? null, 'resourceType' => $resourceType ?? null, 'workerId' => $workerId ?? null]);
	}


	/**
	 * Set tags for an account-level resource
	 */
	public function update(?string $ifMatch = null): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/tags', null, null);
	}


	/**
	 * Delete tags from an account-level resource
	 */
	public function delete(?string $ifMatch = null): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/tags');
	}


	/**
	 * List tag keys
	 */
	public function keys(?string $cursor = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/tags/keys', null, ['cursor' => $cursor ?? null]);
	}


	/**
	 * List tagged resources
	 */
	public function resources(?array $type = null, ?array $tag = null, ?string $cursor = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/tags/resources', null, ['type' => $type ?? null, 'tag' => $tag ?? null, 'cursor' => $cursor ?? null]);
	}


	/**
	 * List tag values
	 */
	public function get(
		string $tagKey,
		?\FoundryCo\Cloudflare\Enums\ResourceTaggingType $type = null,
		?string $cursor = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/tags/values/' . $tagKey, null, ['type' => $type ?? null, 'cursor' => $cursor ?? null]);
	}


	/**
	 * Get tags for a zone-level resource
	 */
	public function tags(
		?string $resourceId = null,
		?\FoundryCo\Cloudflare\Enums\ResourceTaggingResourceType $resourceType = null,
		?string $accessApplicationId = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/tags', null, ['resourceId' => $resourceId ?? null, 'resourceType' => $resourceType ?? null, 'accessApplicationId' => $accessApplicationId ?? null]);
	}


	/**
	 * Set tags for a zone-level resource
	 */
	public function tagsZoneSet(?string $ifMatch = null): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/tags', null, null);
	}


	/**
	 * Delete tags from a zone-level resource
	 */
	public function tagsZoneDelete(?string $ifMatch = null): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/tags');
	}
}
