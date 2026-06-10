<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DNSInternalViewsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Internal DNS Views
	 */
	public function list(
		?string $name = null,
		?string $nameexact = null,
		?string $namecontains = null,
		?string $namestartswith = null,
		?string $nameendswith = null,
		?string $zoneName = null,
		?\FoundryCo\Cloudflare\Enums\DNSInternalViewsForAnAccountMatch $match = null,
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\DNSInternalViewsForAnAccountOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\DNSInternalViewsForAnAccountDirection $direction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dns_settings/views', \FoundryCo\Cloudflare\Responses\DnsViewsForAnAccountListInternalDnsViews::class, ['name' => $name ?? null, 'nameexact' => $nameexact ?? null, 'namecontains' => $namecontains ?? null, 'namestartswith' => $namestartswith ?? null, 'nameendswith' => $nameendswith ?? null, 'zoneName' => $zoneName ?? null, 'match' => $match ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create Internal DNS View
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DnsViewsForAnAccountCreateInternalDnsViewsRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dns_settings/views', \FoundryCo\Cloudflare\Responses\DnsViewsForAnAccountCreateInternalDnsViews::class, $request);
	}


	/**
	 * DNS Internal View Details
	 */
	public function get(string $viewId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dns_settings/views/' . $viewId, \FoundryCo\Cloudflare\Responses\DnsViewsForAnAccountGetInternalDnsView::class, []);
	}


	/**
	 * Update Internal DNS View
	 */
	public function update(
		string $viewId,
		\FoundryCo\Cloudflare\Requests\DnsViewsForAnAccountUpdateInternalDnsViewRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/dns_settings/views/' . $viewId, \FoundryCo\Cloudflare\Responses\DnsViewsForAnAccountUpdateInternalDnsView::class, $request);
	}


	/**
	 * Delete Internal DNS View
	 */
	public function delete(string $viewId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dns_settings/views/' . $viewId);
	}
}
