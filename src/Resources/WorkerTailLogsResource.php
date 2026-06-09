<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkerTailLogsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Tails
	 */
	public function get(string $scriptName): \FoundryCo\Cloudflare\Responses\WorkerTailLogsTails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/tails', \FoundryCo\Cloudflare\Responses\WorkerTailLogsTails::class, []);
	}


	/**
	 * Start Tail
	 */
	public function create(string $scriptName): \FoundryCo\Cloudflare\Responses\WorkerTailLogsTail
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/tails', \FoundryCo\Cloudflare\Responses\WorkerTailLogsTail::class, null);
	}


	/**
	 * Delete Tail
	 */
	public function delete(string $scriptName, string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/tails/' . $id);
	}
}
