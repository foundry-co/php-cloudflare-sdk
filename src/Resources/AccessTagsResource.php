<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccessTagsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List tags
	 */
	public function list(?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/tags', \FoundryCo\Cloudflare\Responses\AccessTagsListTags::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create a tag
	 */
	public function create(\FoundryCo\Cloudflare\Requests\AccessTagsCreateTagRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/access/tags', \FoundryCo\Cloudflare\Responses\AccessTagsCreateTag::class, $request);
	}


	/**
	 * Get a tag
	 */
	public function get(string $tagName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/tags/' . $tagName, \FoundryCo\Cloudflare\Responses\AccessTagsGetATag::class, []);
	}


	/**
	 * Update a tag
	 */
	public function update(string $tagName, \FoundryCo\Cloudflare\Requests\AccessTagsUpdateATagRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/access/tags/' . $tagName, \FoundryCo\Cloudflare\Responses\AccessTagsUpdateATag::class, $request);
	}


	/**
	 * Delete a tag
	 */
	public function delete(string $tagName): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/access/tags/' . $tagName);
	}
}
