<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class StreamWebhookResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * View webhooks
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/stream/webhook', \FoundryCo\Cloudflare\Responses\StreamWebhookViewWebhooks::class, []);
	}


	/**
	 * Create webhooks
	 */
	public function update(\FoundryCo\Cloudflare\Requests\StreamWebhookCreateWebhooksRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/stream/webhook', \FoundryCo\Cloudflare\Responses\StreamWebhookCreateWebhooks::class, $request);
	}


	/**
	 * Delete webhooks
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/stream/webhook');
	}
}
