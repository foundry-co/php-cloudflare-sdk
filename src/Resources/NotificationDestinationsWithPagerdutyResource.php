<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\NotificationDestinationsWithPagerDutyServices
	{
		return $this->client->get('/accounts/' . $this->accountId . '/alerting/v3/destinations/pagerduty', \FoundryCo\Cloudflare\Responses\NotificationDestinationsWithPagerDutyServices::class, []);
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
	public function create(): \FoundryCo\Cloudflare\Responses\NotificationDestinationsWithPagerDutyDuty
	{
		return $this->client->post('/accounts/' . $this->accountId . '/alerting/v3/destinations/pagerduty/connect', \FoundryCo\Cloudflare\Responses\NotificationDestinationsWithPagerDutyDuty::class, null);
	}


	/**
	 * Connect PagerDuty
	 */
	public function get(string $tokenId): \FoundryCo\Cloudflare\Responses\NotificationDestinationsWithPagerDutyToken
	{
		return $this->client->get('/accounts/' . $this->accountId . '/alerting/v3/destinations/pagerduty/connect/' . $tokenId, \FoundryCo\Cloudflare\Responses\NotificationDestinationsWithPagerDutyToken::class, []);
	}
}
