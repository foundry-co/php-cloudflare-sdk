<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CustomIndicatorFeedsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get indicator feeds owned by this account
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/indicator-feeds', \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsGetIndicatorFeeds::class, []);
	}


	/**
	 * Create new indicator feed
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CustomIndicatorFeedsCreateIndicatorFeedsRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/intel/indicator-feeds', \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsCreateIndicatorFeeds::class, $request);
	}


	/**
	 * Grant permission to indicator feed
	 */
	public function update(\FoundryCo\Cloudflare\Requests\CustomIndicatorFeedsAddPermissionRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/intel/indicator-feeds/permissions/add', \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsAddPermission::class, $request);
	}


	/**
	 * Create indicator feed provider
	 */
	public function createprovider(
		\FoundryCo\Cloudflare\Requests\CustomIndicatorFeedsCreateProviderRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/intel/indicator-feeds/permissions/createProvider', \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsCreateProvider::class, $request);
	}


	/**
	 * Revoke permission to indicator feed
	 */
	public function remove(\FoundryCo\Cloudflare\Requests\CustomIndicatorFeedsRemovePermissionRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/intel/indicator-feeds/permissions/remove', \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsRemovePermission::class, $request);
	}


	/**
	 * List indicator feed permissions
	 */
	public function view(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/indicator-feeds/permissions/view', \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsViewPermissions::class, []);
	}


	/**
	 * Get indicator feed metadata
	 */
	public function get(int $feedId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/indicator-feeds/' . $feedId, \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsGetIndicatorFeedMetadata::class, []);
	}


	/**
	 * Update indicator feed metadata
	 */
	public function indicatorFeeds(
		int $feedId,
		\FoundryCo\Cloudflare\Requests\CustomIndicatorFeedsUpdateIndicatorFeedMetadataRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/intel/indicator-feeds/' . $feedId, \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsUpdateIndicatorFeedMetadata::class, $request);
	}


	/**
	 * Get indicator feed data
	 */
	public function data(int $feedId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/indicator-feeds/' . $feedId . '/data', null, []);
	}


	/**
	 * Download indicator feed data
	 */
	public function download(int $feedId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/indicator-feeds/' . $feedId . '/download', \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsDownloadIndicatorFeedData::class, []);
	}


	/**
	 * Update indicator feed data
	 */
	public function snapshot(int $feedId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/intel/indicator-feeds/' . $feedId . '/snapshot', \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsUpdateIndicatorFeedData::class, null);
	}
}
