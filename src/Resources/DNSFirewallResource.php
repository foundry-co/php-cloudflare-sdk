<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(
		?float $page = null,
		?float $perPage = null,
	): \FoundryCo\Cloudflare\Responses\DNSFirewallClusters
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dns_firewall', \FoundryCo\Cloudflare\Responses\DNSFirewallClusters::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create DNS Firewall Cluster
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DnsFirewallCreateDnsFirewallClusterRequest $request,
	): \FoundryCo\Cloudflare\Responses\DNSFirewallCluster
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dns_firewall', \FoundryCo\Cloudflare\Responses\DNSFirewallCluster::class, $request);
	}


	/**
	 * DNS Firewall Cluster Details
	 */
	public function get(string $dnsFirewallId): \FoundryCo\Cloudflare\Responses\DNSFirewallDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dns_firewall/' . $dnsFirewallId, \FoundryCo\Cloudflare\Responses\DNSFirewallDetails::class, []);
	}


	/**
	 * Update DNS Firewall Cluster
	 */
	public function update(
		string $dnsFirewallId,
		\FoundryCo\Cloudflare\Requests\DnsFirewallUpdateDnsFirewallClusterRequest $request,
	): \FoundryCo\Cloudflare\Responses\DNSFirewallCluster
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/dns_firewall/' . $dnsFirewallId, \FoundryCo\Cloudflare\Responses\DNSFirewallCluster::class, $request);
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
	public function reverseDns(string $dnsFirewallId): \FoundryCo\Cloudflare\Responses\DNSFirewallDns
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dns_firewall/' . $dnsFirewallId . '/reverse_dns', \FoundryCo\Cloudflare\Responses\DNSFirewallDns::class, []);
	}


	/**
	 * Update DNS Firewall Cluster Reverse DNS
	 */
	public function dnsFirewallUpdateDnsFirewallClusterReverseDns(
		string $dnsFirewallId,
		\FoundryCo\Cloudflare\Requests\DnsFirewallUpdateDnsFirewallClusterReverseDnsRequest $request,
	): \FoundryCo\Cloudflare\Responses\DNSFirewallDns
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/dns_firewall/' . $dnsFirewallId . '/reverse_dns', \FoundryCo\Cloudflare\Responses\DNSFirewallDns::class, $request);
	}
}
