<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class NotificationWebhooksResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List webhooks
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\NotificationWebhooksWebhooks
	{
		return $this->client->get('/accounts/' . $this->accountId . '/alerting/v3/destinations/webhooks', \FoundryCo\Cloudflare\Responses\NotificationWebhooksWebhooks::class, []);
	}


	/**
	 * Create a webhook
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\NotificationWebhooksCreateAWebhookRequest $request,
	): \FoundryCo\Cloudflare\Responses\NotificationWebhooksWebhook
	{
		return $this->client->post('/accounts/' . $this->accountId . '/alerting/v3/destinations/webhooks', \FoundryCo\Cloudflare\Responses\NotificationWebhooksWebhook::class, $request);
	}


	/**
	 * Get a webhook
	 */
	public function get(string $webhookId): \FoundryCo\Cloudflare\Responses\NotificationWebhooksWebhook
	{
		return $this->client->get('/accounts/' . $this->accountId . '/alerting/v3/destinations/webhooks/' . $webhookId, \FoundryCo\Cloudflare\Responses\NotificationWebhooksWebhook::class, []);
	}


	/**
	 * Update a webhook
	 */
	public function update(
		string $webhookId,
		\FoundryCo\Cloudflare\Requests\NotificationWebhooksUpdateAWebhookRequest $request,
	): \FoundryCo\Cloudflare\Responses\NotificationWebhooksWebhook
	{
		return $this->client->put('/accounts/' . $this->accountId . '/alerting/v3/destinations/webhooks/' . $webhookId, \FoundryCo\Cloudflare\Responses\NotificationWebhooksWebhook::class, $request);
	}


	/**
	 * Delete a webhook
	 */
	public function delete(string $webhookId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/alerting/v3/destinations/webhooks/' . $webhookId);
	}
}
