<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsFeeds
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/indicator-feeds', \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsFeeds::class, []);
	}


	/**
	 * Create new indicator feed
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CustomIndicatorFeedsCreateIndicatorFeedsRequest $request,
	): \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsFeeds
	{
		return $this->client->post('/accounts/' . $this->accountId . '/intel/indicator-feeds', \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsFeeds::class, $request);
	}


	/**
	 * Grant permission to indicator feed
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\CustomIndicatorFeedsAddPermissionRequest $request,
	): \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsPermission
	{
		return $this->client->put('/accounts/' . $this->accountId . '/intel/indicator-feeds/permissions/add', \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsPermission::class, $request);
	}


	/**
	 * Create indicator feed provider
	 */
	public function createprovider(
		\FoundryCo\Cloudflare\Requests\CustomIndicatorFeedsCreateProviderRequest $request,
	): \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsProvider
	{
		return $this->client->put('/accounts/' . $this->accountId . '/intel/indicator-feeds/permissions/createProvider', \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsProvider::class, $request);
	}


	/**
	 * Revoke permission to indicator feed
	 */
	public function remove(
		\FoundryCo\Cloudflare\Requests\CustomIndicatorFeedsRemovePermissionRequest $request,
	): \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsPermission
	{
		return $this->client->put('/accounts/' . $this->accountId . '/intel/indicator-feeds/permissions/remove', \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsPermission::class, $request);
	}


	/**
	 * List indicator feed permissions
	 */
	public function view(): \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsPermissions
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/indicator-feeds/permissions/view', \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsPermissions::class, []);
	}


	/**
	 * Get indicator feed metadata
	 */
	public function get(int $feedId): \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsMetadata
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/indicator-feeds/' . $feedId, \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsMetadata::class, []);
	}


	/**
	 * Update indicator feed metadata
	 */
	public function indicatorFeeds(
		int $feedId,
		\FoundryCo\Cloudflare\Requests\CustomIndicatorFeedsUpdateIndicatorFeedMetadataRequest $request,
	): \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsMetadata
	{
		return $this->client->put('/accounts/' . $this->accountId . '/intel/indicator-feeds/' . $feedId, \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsMetadata::class, $request);
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
	public function download(int $feedId): \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsData
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/indicator-feeds/' . $feedId . '/download', \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsData::class, []);
	}


	/**
	 * Update indicator feed data
	 */
	public function snapshot(int $feedId): \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsData
	{
		return $this->client->put('/accounts/' . $this->accountId . '/intel/indicator-feeds/' . $feedId . '/snapshot', \FoundryCo\Cloudflare\Responses\CustomIndicatorFeedsData::class, null);
	}
}
