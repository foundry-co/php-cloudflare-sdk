<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccessBookmarkApplicationsDeprecatedResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Bookmark applications
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/bookmarks', \FoundryCo\Cloudflare\Responses\AccessBookmarkApplicationsDeprecatedListBookmarkApplications::class, []);
	}


	/**
	 * Get a Bookmark application
	 */
	public function get(string $bookmarkId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/bookmarks/' . $bookmarkId, \FoundryCo\Cloudflare\Responses\AccessBookmarkApplicationsDeprecatedGetABookmarkApplication::class, []);
	}


	/**
	 * Create a Bookmark application
	 */
	public function create(string $bookmarkId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/access/bookmarks/' . $bookmarkId, \FoundryCo\Cloudflare\Responses\AccessBookmarkApplicationsDeprecatedCreateABookmarkApplication::class, null);
	}


	/**
	 * Update a Bookmark application
	 */
	public function update(string $bookmarkId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/access/bookmarks/' . $bookmarkId, \FoundryCo\Cloudflare\Responses\AccessBookmarkApplicationsDeprecatedUpdateABookmarkApplication::class, null);
	}


	/**
	 * Delete a Bookmark application
	 */
	public function delete(string $bookmarkId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/access/bookmarks/' . $bookmarkId);
	}
}
