<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ResourcesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Resources
	 */
	public function list(
		?string $providerId = null,
		?array $resourceType = null,
		?array $resourceId = null,
		?string $region = null,
		?string $resourceGroup = null,
		?bool $managed = null,
		?array $search = null,
		?string $orderBy = null,
		?bool $desc = null,
		?int $perPage = null,
		?int $page = null,
		?bool $cloudflare = null,
		?bool $v2 = null,
	): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cloud/resources', \FoundryCo\Cloudflare\Responses\ResourcesList::class, ['providerId' => $providerId ?? null, 'resourceType' => $resourceType ?? null, 'resourceId' => $resourceId ?? null, 'region' => $region ?? null, 'resourceGroup' => $resourceGroup ?? null, 'managed' => $managed ?? null, 'search' => $search ?? null, 'orderBy' => $orderBy ?? null, 'desc' => $desc ?? null, 'perPage' => $perPage ?? null, 'page' => $page ?? null, 'cloudflare' => $cloudflare ?? null, 'v2' => $v2 ?? null]);
	}


	/**
	 * Export Resources
	 */
	public function export(
		?string $providerId = null,
		?array $resourceType = null,
		?array $resourceId = null,
		?string $region = null,
		?string $resourceGroup = null,
		?array $search = null,
		?string $orderBy = null,
		?bool $desc = null,
		?bool $v2 = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cloud/resources/export', null, ['providerId' => $providerId ?? null, 'resourceType' => $resourceType ?? null, 'resourceId' => $resourceId ?? null, 'region' => $region ?? null, 'resourceGroup' => $resourceGroup ?? null, 'search' => $search ?? null, 'orderBy' => $orderBy ?? null, 'desc' => $desc ?? null, 'v2' => $v2 ?? null]);
	}


	/**
	 * Preview Rego Query
	 */
	public function create(\FoundryCo\Cloudflare\Requests\ResourcesCatalogPolicyPreviewRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/cloud/resources/policy-preview', null, $request);
	}


	/**
	 * Read Resource
	 */
	public function get(string $resourceId, ?bool $v2 = null): \FoundryCo\Cloudflare\Responses\ResourcesRead
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cloud/resources/' . $resourceId, \FoundryCo\Cloudflare\Responses\ResourcesRead::class, ['v2' => $v2 ?? null]);
	}
}
