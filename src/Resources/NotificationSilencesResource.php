<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class NotificationSilencesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Silences
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\NotificationSilencesSilences
	{
		return $this->client->get('/accounts/' . $this->accountId . '/alerting/v3/silences', \FoundryCo\Cloudflare\Responses\NotificationSilencesSilences::class, []);
	}


	/**
	 * Create Silences
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/alerting/v3/silences', null, null);
	}


	/**
	 * Update Silences
	 */
	public function update(): \FoundryCo\Cloudflare\Responses\NotificationSilencesSilences
	{
		return $this->client->put('/accounts/' . $this->accountId . '/alerting/v3/silences', \FoundryCo\Cloudflare\Responses\NotificationSilencesSilences::class, null);
	}


	/**
	 * Get Silence
	 */
	public function get(string $silenceId): \FoundryCo\Cloudflare\Responses\NotificationSilencesSilence
	{
		return $this->client->get('/accounts/' . $this->accountId . '/alerting/v3/silences/' . $silenceId, \FoundryCo\Cloudflare\Responses\NotificationSilencesSilence::class, []);
	}


	/**
	 * Delete Silence
	 */
	public function delete(string $silenceId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/alerting/v3/silences/' . $silenceId);
	}
}
