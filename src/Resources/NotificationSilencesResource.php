<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/alerting/v3/silences', \FoundryCo\Cloudflare\Responses\NotificationSilencesListSilences::class, []);
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
	public function update(): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/alerting/v3/silences', \FoundryCo\Cloudflare\Responses\NotificationSilencesUpdateSilences::class, null);
	}


	/**
	 * Get Silence
	 */
	public function get(string $silenceId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/alerting/v3/silences/' . $silenceId, \FoundryCo\Cloudflare\Responses\NotificationSilencesGetSilence::class, []);
	}


	/**
	 * Delete Silence
	 */
	public function delete(string $silenceId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/alerting/v3/silences/' . $silenceId);
	}
}
