<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CustomHostnameResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Custom Hostnames
	 */
	public function list(
		?string $hostname = null,
		?string $hostnamecontain = null,
		?string $id = null,
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\CustomHostnameForAZoneOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\CustomHostnameForAZoneDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\CustomHostnameForAZoneSslStatus $sslStatus = null,
		?\FoundryCo\Cloudflare\Enums\CustomHostnameForAZoneHostnameStatus $hostnameStatus = null,
		?\FoundryCo\Cloudflare\Enums\CustomHostnameForAZoneCertificateAuthority $certificateAuthority = null,
		?bool $wildcard = null,
		?string $customOriginServer = null,
		?\FoundryCo\Cloudflare\Enums\CustomHostnameForAZoneSsl $ssl = null,
	): \FoundryCo\Cloudflare\Responses\CustomHostnameForAZoneHostnames
	{
		return $this->client->get('/zones/' . $this->zoneId . '/custom_hostnames', \FoundryCo\Cloudflare\Responses\CustomHostnameForAZoneHostnames::class, ['hostname' => $hostname ?? null, 'hostnamecontain' => $hostnamecontain ?? null, 'id' => $id ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null, 'sslStatus' => $sslStatus ?? null, 'hostnameStatus' => $hostnameStatus ?? null, 'certificateAuthority' => $certificateAuthority ?? null, 'wildcard' => $wildcard ?? null, 'customOriginServer' => $customOriginServer ?? null, 'ssl' => $ssl ?? null]);
	}


	/**
	 * Create Custom Hostname
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CustomHostnameForAZoneCreateCustomHostnameRequest $request,
	): \FoundryCo\Cloudflare\Responses\CustomHostnameForAZoneHostname
	{
		return $this->client->post('/zones/' . $this->zoneId . '/custom_hostnames', \FoundryCo\Cloudflare\Responses\CustomHostnameForAZoneHostname::class, $request);
	}


	/**
	 * Custom Hostname Details
	 */
	public function get(string $customHostnameId): \FoundryCo\Cloudflare\Responses\CustomHostnameForAZoneDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/custom_hostnames/' . $customHostnameId, \FoundryCo\Cloudflare\Responses\CustomHostnameForAZoneDetails::class, []);
	}


	/**
	 * Edit Custom Hostname
	 */
	public function update(
		string $customHostnameId,
		\FoundryCo\Cloudflare\Requests\CustomHostnameForAZoneEditCustomHostnameRequest $request,
	): \FoundryCo\Cloudflare\Responses\CustomHostnameForAZoneHostname
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/custom_hostnames/' . $customHostnameId, \FoundryCo\Cloudflare\Responses\CustomHostnameForAZoneHostname::class, $request);
	}


	/**
	 * Delete Custom Hostname (and any issued SSL certificates)
	 */
	public function delete(string $customHostnameId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/custom_hostnames/' . $customHostnameId);
	}


	/**
	 * Replace Custom Certificate and Custom Key In Custom Hostname
	 */
	public function certificates(
		string $customHostnameId,
		string $certificatePackId,
		string $certificateId,
		\FoundryCo\Cloudflare\Requests\CustomHostnameForAZoneEditCustomCertificateCustomHostnameRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/custom_hostnames/' . $customHostnameId . '/certificate_pack/' . $certificatePackId . '/certificates/' . $certificateId, null, $request);
	}


	/**
	 * Delete Single Certificate And Key For Custom Hostname
	 */
	public function customHostnameForAZoneDeleteSingleCertificateAndKeyInACustomHostname(
		string $customHostnameId,
		string $certificatePackId,
		string $certificateId,
	): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/custom_hostnames/' . $customHostnameId . '/certificate_pack/' . $certificatePackId . '/certificates/' . $certificateId);
	}
}
