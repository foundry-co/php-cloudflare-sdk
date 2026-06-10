<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class EmailRoutingSettingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get Email Routing settings
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/routing', \FoundryCo\Cloudflare\Responses\EmailRoutingSettingsGetEmailRoutingSettings::class, []);
	}


	/**
	 * Disable Email Routing
	 */
	public function create(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/email/routing/disable', \FoundryCo\Cloudflare\Responses\EmailRoutingSettingsDisableEmailRouting::class, null);
	}


	/**
	 * Email Routing - DNS settings
	 */
	public function dns(?string $subdomain = null): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/routing/dns', null, ['subdomain' => $subdomain ?? null]);
	}


	/**
	 * Enable Email Routing
	 */
	public function emailRoutingSettingsEnableEmailRoutingDns(
		\FoundryCo\Cloudflare\Requests\EmailRoutingSettingsEnableEmailRoutingDnsRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/email/routing/dns', \FoundryCo\Cloudflare\Responses\EmailRoutingSettingsEnableEmailRoutingDns::class, $request);
	}


	/**
	 * Unlock Email Routing
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\EmailRoutingSettingsUnlockEmailRoutingDnsRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/email/routing/dns', \FoundryCo\Cloudflare\Responses\EmailRoutingSettingsUnlockEmailRoutingDns::class, $request);
	}


	/**
	 * Disable Email Routing
	 */
	public function delete(
		\FoundryCo\Cloudflare\Requests\EmailRoutingSettingsDisableEmailRoutingDnsRequest $request,
	): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/email/routing/dns');
	}


	/**
	 * Enable Email Routing
	 */
	public function enable(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/email/routing/enable', \FoundryCo\Cloudflare\Responses\EmailRoutingSettingsEnableEmailRouting::class, null);
	}
}
