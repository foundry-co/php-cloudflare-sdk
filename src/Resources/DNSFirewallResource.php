<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DNSFirewallResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List DNS Firewall Clusters
	 */
	public function list(?float $page = null, ?float $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dns_firewall', \FoundryCo\Cloudflare\Responses\DnsFirewallListDnsFirewallClusters::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create DNS Firewall Cluster
	 */
	public function create(\FoundryCo\Cloudflare\Requests\DnsFirewallCreateDnsFirewallClusterRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dns_firewall', \FoundryCo\Cloudflare\Responses\DnsFirewallCreateDnsFirewallCluster::class, $request);
	}


	/**
	 * DNS Firewall Cluster Details
	 */
	public function get(string $dnsFirewallId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dns_firewall/' . $dnsFirewallId, \FoundryCo\Cloudflare\Responses\DnsFirewallDnsFirewallClusterDetails::class, []);
	}


	/**
	 * Update DNS Firewall Cluster
	 */
	public function update(
		string $dnsFirewallId,
		\FoundryCo\Cloudflare\Requests\DnsFirewallUpdateDnsFirewallClusterRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/dns_firewall/' . $dnsFirewallId, \FoundryCo\Cloudflare\Responses\DnsFirewallUpdateDnsFirewallCluster::class, $request);
	}


	/**
	 * Delete DNS Firewall Cluster
	 */
	public function delete(string $dnsFirewallId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dns_firewall/' . $dnsFirewallId);
	}


	/**
	 * Show DNS Firewall Cluster Reverse DNS
	 */
	public function reverseDns(string $dnsFirewallId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dns_firewall/' . $dnsFirewallId . '/reverse_dns', \FoundryCo\Cloudflare\Responses\DnsFirewallShowDnsFirewallClusterReverseDns::class, []);
	}


	/**
	 * Update DNS Firewall Cluster Reverse DNS
	 */
	public function dnsFirewallUpdateDnsFirewallClusterReverseDns(
		string $dnsFirewallId,
		\FoundryCo\Cloudflare\Requests\DnsFirewallUpdateDnsFirewallClusterReverseDnsRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/dns_firewall/' . $dnsFirewallId . '/reverse_dns', \FoundryCo\Cloudflare\Responses\DnsFirewallUpdateDnsFirewallClusterReverseDns::class, $request);
	}
}
