<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccountBillingProfileResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Billing Profile Details
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/billing/profile', \FoundryCo\Cloudflare\Responses\AccountBillingProfileDeprecatedBillingProfileDetails::class, []);
	}
}
