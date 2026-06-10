<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class BotnetThreatFeedResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get daily report
	 */
	public function get(int $asnId, ?\DateTimeImmutable $date = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/botnet_feed/asn/' . $asnId . '/day_report', \FoundryCo\Cloudflare\Responses\BotnetThreatFeedGetDayReport::class, ['date' => $date ?? null]);
	}


	/**
	 * Get full report
	 */
	public function fullReport(int $asnId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/botnet_feed/asn/' . $asnId . '/full_report', \FoundryCo\Cloudflare\Responses\BotnetThreatFeedGetFullReport::class, []);
	}


	/**
	 * Get list of ASNs
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/botnet_feed/configs/asn', \FoundryCo\Cloudflare\Responses\BotnetThreatFeedListAsn::class, []);
	}


	/**
	 * Delete an ASN
	 */
	public function delete(int $asnId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/botnet_feed/configs/asn/' . $asnId);
	}
}
