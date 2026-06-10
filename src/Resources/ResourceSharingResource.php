<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ResourceSharingResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List account shares
	 */
	public function list(
		?\FoundryCo\Cloudflare\Enums\ResourceSharingStatus $status = null,
		?\FoundryCo\Cloudflare\Enums\ResourceSharingKind $kind = null,
		?\FoundryCo\Cloudflare\Enums\ResourceSharingTargetType $targetType = null,
		?array $resourceTypes = null,
		?\FoundryCo\Cloudflare\Enums\ResourceSharingOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\ResourceSharingDirection $direction = null,
		?int $page = null,
		?int $perPage = null,
		?bool $includeResources = null,
		?bool $includeRecipientCounts = null,
		?array $tag = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/shares', \FoundryCo\Cloudflare\Responses\SharesList::class, ['status' => $status ?? null, 'kind' => $kind ?? null, 'targetType' => $targetType ?? null, 'resourceTypes' => $resourceTypes ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'includeResources' => $includeResources ?? null, 'includeRecipientCounts' => $includeRecipientCounts ?? null, 'tag' => $tag ?? null]);
	}


	/**
	 * Create a new share
	 */
	public function create(\FoundryCo\Cloudflare\Requests\ShareCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/shares', null, $request);
	}


	/**
	 * Get account share by ID
	 */
	public function get(string $shareId, ?bool $includeResources = null, ?bool $includeRecipientCounts = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/shares/' . $shareId, null, ['includeResources' => $includeResources ?? null, 'includeRecipientCounts' => $includeRecipientCounts ?? null]);
	}


	/**
	 * Update a share
	 */
	public function update(string $shareId, \FoundryCo\Cloudflare\Requests\ShareUpdateRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/shares/' . $shareId, null, $request);
	}


	/**
	 * Delete a share
	 */
	public function delete(string $shareId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/shares/' . $shareId);
	}


	/**
	 * List share recipients by share ID
	 */
	public function recipients(
		string $shareId,
		?bool $includeResources = null,
		?int $page = null,
		?int $perPage = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/shares/' . $shareId . '/recipients', \FoundryCo\Cloudflare\Responses\ShareRecipientsList::class, ['includeResources' => $includeResources ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create a new share recipient
	 */
	public function shareRecipientCreate(
		string $shareId,
		\FoundryCo\Cloudflare\Requests\ShareRecipientCreateRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/shares/' . $shareId . '/recipients', null, $request);
	}


	/**
	 * Update a share's recipients
	 */
	public function shareRecipientsUpdate(string $shareId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/shares/' . $shareId . '/recipients', null, null);
	}


	/**
	 * Get share recipient by ID
	 */
	public function shareRecipientsGetById(string $shareId, string $recipientId, ?bool $includeResources = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/shares/' . $shareId . '/recipients/' . $recipientId, null, ['includeResources' => $includeResources ?? null]);
	}


	/**
	 * Delete a share recipient
	 */
	public function shareRecipientDelete(string $shareId, string $recipientId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/shares/' . $shareId . '/recipients/' . $recipientId);
	}


	/**
	 * List share resources by share ID
	 */
	public function resources(
		string $shareId,
		?\FoundryCo\Cloudflare\Enums\ResourceSharingStatus $status = null,
		?\FoundryCo\Cloudflare\Enums\ResourceSharingResourceType $resourceType = null,
		?int $page = null,
		?int $perPage = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/shares/' . $shareId . '/resources', \FoundryCo\Cloudflare\Responses\ShareResourcesList::class, ['status' => $status ?? null, 'resourceType' => $resourceType ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create a new share resource
	 */
	public function shareResourceCreate(
		string $shareId,
		\FoundryCo\Cloudflare\Requests\ShareResourceCreateRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/shares/' . $shareId . '/resources', null, $request);
	}


	/**
	 * Get share resource by ID
	 */
	public function shareResourcesGetById(string $shareId, string $shareResourceId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/shares/' . $shareId . '/resources/' . $shareResourceId, null, []);
	}


	/**
	 * Update a share resource
	 */
	public function shareResourceUpdate(
		string $shareId,
		string $shareResourceId,
		\FoundryCo\Cloudflare\Requests\ShareResourceUpdateRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/shares/' . $shareId . '/resources/' . $shareResourceId, null, $request);
	}


	/**
	 * Delete a share resource
	 */
	public function shareResourceDelete(string $shareId, string $shareResourceId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/shares/' . $shareId . '/resources/' . $shareResourceId);
	}


	/**
	 * List organization shares
	 */
	public function shares(
		string $organizationId,
		?\FoundryCo\Cloudflare\Enums\ResourceSharingStatus $status = null,
		?\FoundryCo\Cloudflare\Enums\ResourceSharingKind $kind = null,
		?\FoundryCo\Cloudflare\Enums\ResourceSharingTargetType $targetType = null,
		?array $resourceTypes = null,
		?\FoundryCo\Cloudflare\Enums\ResourceSharingOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\ResourceSharingDirection $direction = null,
		?int $page = null,
		?int $perPage = null,
	): mixed
	{
		return $this->client->get('/organizations/' . $organizationId . '/shares', \FoundryCo\Cloudflare\Responses\OrganizationSharesList::class, ['status' => $status ?? null, 'kind' => $kind ?? null, 'targetType' => $targetType ?? null, 'resourceTypes' => $resourceTypes ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}
}
