<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WebhooksResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Fetch all webhooks details
	 */
	public function get(string $appId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/webhooks', null, []);
	}


	/**
	 * Add a webhook
	 */
	public function create(string $appId, \FoundryCo\Cloudflare\Requests\AddWebhookRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/webhooks', null, $request);
	}


	/**
	 * Fetch all supported webhook events
	 */
	public function all(string $appId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/webhooks/all', null, []);
	}


	/**
	 * Fetch details of a webhook
	 */
	public function webhooks(string $appId, string $webhookId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/webhooks/' . $webhookId, null, []);
	}


	/**
	 * Replace a webhook
	 */
	public function update(
		string $appId,
		string $webhookId,
		\FoundryCo\Cloudflare\Requests\ReplaceWebhookRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/webhooks/' . $webhookId, null, $request);
	}


	/**
	 * Edit a webhook
	 */
	public function editWebhook(
		string $appId,
		string $webhookId,
		\FoundryCo\Cloudflare\Requests\EditWebhookRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/webhooks/' . $webhookId, null, $request);
	}


	/**
	 * Delete a webhook
	 */
	public function delete(string $appId, string $webhookId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/webhooks/' . $webhookId);
	}
}
