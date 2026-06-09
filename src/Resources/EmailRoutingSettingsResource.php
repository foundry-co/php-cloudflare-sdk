<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\EmailRoutingSettingsSettings
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/routing', \FoundryCo\Cloudflare\Responses\EmailRoutingSettingsSettings::class, []);
	}


	/**
	 * Disable Email Routing
	 */
	public function create(): \FoundryCo\Cloudflare\Responses\EmailRoutingSettingsRouting
	{
		return $this->client->post('/zones/' . $this->zoneId . '/email/routing/disable', \FoundryCo\Cloudflare\Responses\EmailRoutingSettingsRouting::class, null);
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
	): \FoundryCo\Cloudflare\Responses\EmailRoutingSettingsDns
	{
		return $this->client->post('/zones/' . $this->zoneId . '/email/routing/dns', \FoundryCo\Cloudflare\Responses\EmailRoutingSettingsDns::class, $request);
	}


	/**
	 * Unlock Email Routing
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\EmailRoutingSettingsUnlockEmailRoutingDnsRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailRoutingSettingsDns
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/email/routing/dns', \FoundryCo\Cloudflare\Responses\EmailRoutingSettingsDns::class, $request);
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
	public function enable(): \FoundryCo\Cloudflare\Responses\EmailRoutingSettingsRouting
	{
		return $this->client->post('/zones/' . $this->zoneId . '/email/routing/enable', \FoundryCo\Cloudflare\Responses\EmailRoutingSettingsRouting::class, null);
	}
}
