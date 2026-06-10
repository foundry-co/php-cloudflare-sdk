<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class NotificationDestinationsWithPagerdutyResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List PagerDuty services
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/alerting/v3/destinations/pagerduty', \FoundryCo\Cloudflare\Responses\NotificationDestinationsWithPagerDutyListPagerDutyServices::class, []);
	}


	/**
	 * Delete PagerDuty Services
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/alerting/v3/destinations/pagerduty');
	}


	/**
	 * Create PagerDuty integration token
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/alerting/v3/destinations/pagerduty/connect', \FoundryCo\Cloudflare\Responses\NotificationDestinationsWithPagerDutyConnectPagerDuty::class, null);
	}


	/**
	 * Connect PagerDuty
	 */
	public function get(string $tokenId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/alerting/v3/destinations/pagerduty/connect/' . $tokenId, \FoundryCo\Cloudflare\Responses\NotificationDestinationsWithPagerDutyConnectPagerDutyToken::class, []);
	}
}
