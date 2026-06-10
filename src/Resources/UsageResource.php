<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class UsageResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get event count
	 */
	public function list(?string $from = null, ?string $to = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/observability/usage', \FoundryCo\Cloudflare\Responses\Usageget::class, ['from' => $from ?? null, 'to' => $to ?? null]);
	}
}
