<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	): \FoundryCo\Cloudflare\Responses\DNSInternalViewsForAnAccountViews
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dns_settings/views', \FoundryCo\Cloudflare\Responses\DNSInternalViewsForAnAccountViews::class, ['name' => $name ?? null, 'nameexact' => $nameexact ?? null, 'namecontains' => $namecontains ?? null, 'namestartswith' => $namestartswith ?? null, 'nameendswith' => $nameendswith ?? null, 'zoneName' => $zoneName ?? null, 'match' => $match ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create Internal DNS View
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DnsViewsForAnAccountCreateInternalDnsViewsRequest $request,
	): \FoundryCo\Cloudflare\Responses\DNSInternalViewsForAnAccountViews
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dns_settings/views', \FoundryCo\Cloudflare\Responses\DNSInternalViewsForAnAccountViews::class, $request);
	}


	/**
	 * DNS Internal View Details
	 */
	public function get(string $viewId): \FoundryCo\Cloudflare\Responses\DNSInternalViewsForAnAccountView
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dns_settings/views/' . $viewId, \FoundryCo\Cloudflare\Responses\DNSInternalViewsForAnAccountView::class, []);
	}


	/**
	 * Update Internal DNS View
	 */
	public function update(
		string $viewId,
		\FoundryCo\Cloudflare\Requests\DnsViewsForAnAccountUpdateInternalDnsViewRequest $request,
	): \FoundryCo\Cloudflare\Responses\DNSInternalViewsForAnAccountView
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/dns_settings/views/' . $viewId, \FoundryCo\Cloudflare\Responses\DNSInternalViewsForAnAccountView::class, $request);
	}


	/**
	 * Delete Internal DNS View
	 */
	public function delete(string $viewId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dns_settings/views/' . $viewId);
	}
}
