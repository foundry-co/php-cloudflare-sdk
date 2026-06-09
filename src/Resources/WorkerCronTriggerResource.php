<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function get(string $scriptName): \FoundryCo\Cloudflare\Responses\WorkerCronTriggerTriggers
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/schedules', \FoundryCo\Cloudflare\Responses\WorkerCronTriggerTriggers::class, []);
	}


	/**
	 * Update Cron Triggers
	 */
	public function update(string $scriptName): \FoundryCo\Cloudflare\Responses\WorkerCronTriggerTriggers
	{
		return $this->client->put('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/schedules', \FoundryCo\Cloudflare\Responses\WorkerCronTriggerTriggers::class, null);
	}
}
