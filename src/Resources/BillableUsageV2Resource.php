<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class BillableUsageV2Resource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get Account Usage (Version 2, Alpha, Restricted)
	 */
	public function list(?\DateTimeImmutable $from = null, ?\DateTimeImmutable $to = null, ?string $metric = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/billable/usage', \FoundryCo\Cloudflare\Responses\BillableUsageV2GetAccountUsage::class, ['from' => $from ?? null, 'to' => $to ?? null, 'metric' => $metric ?? null]);
	}


	/**
	 * Get Organization Usage (Version 2, Alpha, Restricted)
	 */
	public function get(
		string $organizationId,
		?\DateTimeImmutable $from = null,
		?\DateTimeImmutable $to = null,
		?string $metric = null,
	): mixed
	{
		return $this->client->get('/organizations/' . $organizationId . '/billable/usage', \FoundryCo\Cloudflare\Responses\BillableUsageV2GetOrganizationUsage::class, ['from' => $from ?? null, 'to' => $to ?? null, 'metric' => $metric ?? null]);
	}
}
