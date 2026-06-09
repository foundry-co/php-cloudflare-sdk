<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DNSSECResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * DNSSEC Details
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\DNSSECDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/dnssec', \FoundryCo\Cloudflare\Responses\DNSSECDetails::class, []);
	}


	/**
	 * Edit DNSSEC Status
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\DnssecEditDnssecStatusRequest $request,
	): \FoundryCo\Cloudflare\Responses\DNSSECStatus
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/dnssec', \FoundryCo\Cloudflare\Responses\DNSSECStatus::class, $request);
	}


	/**
	 * Delete DNSSEC records
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/dnssec');
	}


	/**
	 * List DNSSEC ZSKs
	 */
	public function zsk(): \FoundryCo\Cloudflare\Responses\DNSSECZsks
	{
		return $this->client->get('/zones/' . $this->zoneId . '/dnssec/zsk', \FoundryCo\Cloudflare\Responses\DNSSECZsks::class, []);
	}
}
