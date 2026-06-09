<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccessCustomPagesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List custom pages
	 */
	public function list(?int $page = null, ?int $perPage = null): \FoundryCo\Cloudflare\Responses\AccessCustomPagesPages
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/custom_pages', \FoundryCo\Cloudflare\Responses\AccessCustomPagesPages::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create a custom page
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\AccessCustomPagesCreateACustomPageRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccessCustomPagesPage
	{
		return $this->client->post('/accounts/' . $this->accountId . '/access/custom_pages', \FoundryCo\Cloudflare\Responses\AccessCustomPagesPage::class, $request);
	}


	/**
	 * Get a custom page
	 */
	public function get(string $customPageId): \FoundryCo\Cloudflare\Responses\AccessCustomPagesPage
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/custom_pages/' . $customPageId, \FoundryCo\Cloudflare\Responses\AccessCustomPagesPage::class, []);
	}


	/**
	 * Update a custom page
	 */
	public function update(
		string $customPageId,
		\FoundryCo\Cloudflare\Requests\AccessCustomPagesUpdateACustomPageRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccessCustomPagesPage
	{
		return $this->client->put('/accounts/' . $this->accountId . '/access/custom_pages/' . $customPageId, \FoundryCo\Cloudflare\Responses\AccessCustomPagesPage::class, $request);
	}


	/**
	 * Delete a custom page
	 */
	public function delete(string $customPageId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/access/custom_pages/' . $customPageId);
	}
}
