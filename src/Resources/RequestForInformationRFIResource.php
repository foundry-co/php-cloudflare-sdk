<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RequestForInformationRFIResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Requests
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CloudforceOneRequestListRequest $request,
	): \FoundryCo\Cloudflare\Responses\RequestForInformationRFIList
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/requests', \FoundryCo\Cloudflare\Responses\RequestForInformationRFIList::class, $request);
	}


	/**
	 * Get Request Priority, Status, and TLP constants
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\RequestForInformationRFIConstants
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/requests/constants', \FoundryCo\Cloudflare\Responses\RequestForInformationRFIConstants::class, []);
	}


	/**
	 * Create a New Request.
	 */
	public function new(
		\FoundryCo\Cloudflare\Requests\CloudforceOneRequestNewRequest $request,
	): \FoundryCo\Cloudflare\Responses\RequestForInformationRFINew
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/requests/new', \FoundryCo\Cloudflare\Responses\RequestForInformationRFINew::class, $request);
	}


	/**
	 * Get Request Quota
	 */
	public function quota(): \FoundryCo\Cloudflare\Responses\RequestForInformationRFIQuota
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/requests/quota', \FoundryCo\Cloudflare\Responses\RequestForInformationRFIQuota::class, []);
	}


	/**
	 * Get Request Types
	 */
	public function types(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/requests/types', null, []);
	}


	/**
	 * Get a Request
	 */
	public function get(string $requestId): \FoundryCo\Cloudflare\Responses\RequestForInformationRFIGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/requests/' . $requestId, \FoundryCo\Cloudflare\Responses\RequestForInformationRFIGet::class, []);
	}


	/**
	 * Update a Request
	 */
	public function update(
		string $requestId,
		\FoundryCo\Cloudflare\Requests\CloudforceOneRequestUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\RequestForInformationRFIUpdate
	{
		return $this->client->put('/accounts/' . $this->accountId . '/cloudforce-one/requests/' . $requestId, \FoundryCo\Cloudflare\Responses\RequestForInformationRFIUpdate::class, $request);
	}


	/**
	 * Delete a Request
	 */
	public function delete(string $requestId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/requests/' . $requestId);
	}


	/**
	 * List Request Assets
	 */
	public function asset(
		string $requestId,
		\FoundryCo\Cloudflare\Requests\CloudforceOneRequestAssetListRequest $request,
	): \FoundryCo\Cloudflare\Responses\RequestForInformationRFIList
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/requests/' . $requestId . '/asset', \FoundryCo\Cloudflare\Responses\RequestForInformationRFIList::class, $request);
	}


	/**
	 * Create a New Request Asset
	 */
	public function cloudforceOneRequestAssetNew(
		string $requestId,
	): \FoundryCo\Cloudflare\Responses\RequestForInformationRFINew
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/requests/' . $requestId . '/asset/new', \FoundryCo\Cloudflare\Responses\RequestForInformationRFINew::class, null);
	}


	/**
	 * Get a Request Asset
	 */
	public function cloudforceOneRequestAssetGet(
		string $requestId,
		string $assetId,
	): \FoundryCo\Cloudflare\Responses\RequestForInformationRFIGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/requests/' . $requestId . '/asset/' . $assetId, \FoundryCo\Cloudflare\Responses\RequestForInformationRFIGet::class, []);
	}


	/**
	 * Update a Request Asset
	 */
	public function cloudforceOneRequestAssetUpdate(
		string $requestId,
		string $assetId,
		\FoundryCo\Cloudflare\Requests\CloudforceOneRequestAssetUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\RequestForInformationRFIUpdate
	{
		return $this->client->put('/accounts/' . $this->accountId . '/cloudforce-one/requests/' . $requestId . '/asset/' . $assetId, \FoundryCo\Cloudflare\Responses\RequestForInformationRFIUpdate::class, $request);
	}


	/**
	 * Delete a Request Asset
	 */
	public function cloudforceOneRequestAssetDelete(string $requestId, string $assetId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/requests/' . $requestId . '/asset/' . $assetId);
	}


	/**
	 * List Request Messages
	 */
	public function message(
		string $requestId,
		\FoundryCo\Cloudflare\Requests\CloudforceOneRequestMessageListRequest $request,
	): \FoundryCo\Cloudflare\Responses\RequestForInformationRFIList
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/requests/' . $requestId . '/message', \FoundryCo\Cloudflare\Responses\RequestForInformationRFIList::class, $request);
	}


	/**
	 * Create a New Request Message
	 */
	public function cloudforceOneRequestMessageNew(
		string $requestId,
		\FoundryCo\Cloudflare\Requests\CloudforceOneRequestMessageNewRequest $request,
	): \FoundryCo\Cloudflare\Responses\RequestForInformationRFINew
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/requests/' . $requestId . '/message/new', \FoundryCo\Cloudflare\Responses\RequestForInformationRFINew::class, $request);
	}


	/**
	 * Update a Request Message
	 */
	public function cloudforceOneRequestMessageUpdate(
		string $requestId,
		int $messageId,
		\FoundryCo\Cloudflare\Requests\CloudforceOneRequestMessageUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\RequestForInformationRFIUpdate
	{
		return $this->client->put('/accounts/' . $this->accountId . '/cloudforce-one/requests/' . $requestId . '/message/' . $messageId, \FoundryCo\Cloudflare\Responses\RequestForInformationRFIUpdate::class, $request);
	}


	/**
	 * Delete a Request Message
	 */
	public function cloudforceOneRequestMessageDelete(string $requestId, int $messageId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/requests/' . $requestId . '/message/' . $messageId);
	}
}
