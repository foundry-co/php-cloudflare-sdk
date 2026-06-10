<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class BillableResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get PayGo Account Billable Usage (Version 1, Alpha)
	 */
	public function list(?\DateTimeImmutable $from = null, ?\DateTimeImmutable $to = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/paygo-usage', \FoundryCo\Cloudflare\Responses\BillableUsageGetPaygoAccountUsage::class, ['from' => $from ?? null, 'to' => $to ?? null]);
	}
}
