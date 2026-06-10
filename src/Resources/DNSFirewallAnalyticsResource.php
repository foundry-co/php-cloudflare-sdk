<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DNSFirewallAnalyticsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Table
	 */
	public function get(
		string $dnsFirewallId,
		?string $metrics = null,
		?string $dimensions = null,
		?\DateTimeImmutable $since = null,
		?\DateTimeImmutable $until = null,
		?int $limit = null,
		?string $sort = null,
		?string $filters = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dns_firewall/' . $dnsFirewallId . '/dns_analytics/report', \FoundryCo\Cloudflare\Responses\DnsFirewallAnalyticsTable::class, ['metrics' => $metrics ?? null, 'dimensions' => $dimensions ?? null, 'since' => $since ?? null, 'until' => $until ?? null, 'limit' => $limit ?? null, 'sort' => $sort ?? null, 'filters' => $filters ?? null]);
	}


	/**
	 * By Time
	 */
	public function bytime(
		string $dnsFirewallId,
		?string $metrics = null,
		?string $dimensions = null,
		?\DateTimeImmutable $since = null,
		?\DateTimeImmutable $until = null,
		?int $limit = null,
		?string $sort = null,
		?string $filters = null,
		?\FoundryCo\Cloudflare\Enums\DNSFirewallAnalyticsTimeDelta $timeDelta = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dns_firewall/' . $dnsFirewallId . '/dns_analytics/report/bytime', \FoundryCo\Cloudflare\Responses\DnsFirewallAnalyticsByTime::class, ['metrics' => $metrics ?? null, 'dimensions' => $dimensions ?? null, 'since' => $since ?? null, 'until' => $until ?? null, 'limit' => $limit ?? null, 'sort' => $sort ?? null, 'filters' => $filters ?? null, 'timeDelta' => $timeDelta ?? null]);
	}
}
