<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkerCronTriggerResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get Cron Triggers
	 */
	public function get(string $scriptName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/schedules', \FoundryCo\Cloudflare\Responses\WorkerCronTriggerGetCronTriggers::class, []);
	}


	/**
	 * Update Cron Triggers
	 */
	public function update(string $scriptName): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/schedules', \FoundryCo\Cloudflare\Responses\WorkerCronTriggerUpdateCronTriggers::class, null);
	}
}
