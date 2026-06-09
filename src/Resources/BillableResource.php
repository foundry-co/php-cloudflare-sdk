<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(
		?\DateTimeImmutable $from = null,
		?\DateTimeImmutable $to = null,
	): \FoundryCo\Cloudflare\Responses\BillableUsageUsage
	{
		return $this->client->get('/accounts/' . $this->accountId . '/paygo-usage', \FoundryCo\Cloudflare\Responses\BillableUsageUsage::class, ['from' => $from ?? null, 'to' => $to ?? null]);
	}
}
