<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SecondaryDNSTSIGResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List TSIGs
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\SecondaryDNSTSIGGs
	{
		return $this->client->get('/accounts/' . $this->accountId . '/secondary_dns/tsigs', \FoundryCo\Cloudflare\Responses\SecondaryDNSTSIGGs::class, []);
	}


	/**
	 * Create TSIG
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\SecondaryDnsTsigCreateTsigRequest $request,
	): \FoundryCo\Cloudflare\Responses\SecondaryDNSTSIGTsig
	{
		return $this->client->post('/accounts/' . $this->accountId . '/secondary_dns/tsigs', \FoundryCo\Cloudflare\Responses\SecondaryDNSTSIGTsig::class, $request);
	}


	/**
	 * TSIG Details
	 */
	public function get(string $tsigId): \FoundryCo\Cloudflare\Responses\SecondaryDNSTSIGDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/secondary_dns/tsigs/' . $tsigId, \FoundryCo\Cloudflare\Responses\SecondaryDNSTSIGDetails::class, []);
	}


	/**
	 * Update TSIG
	 */
	public function update(
		string $tsigId,
		\FoundryCo\Cloudflare\Requests\SecondaryDnsTsigUpdateTsigRequest $request,
	): \FoundryCo\Cloudflare\Responses\SecondaryDNSTSIGTsig
	{
		return $this->client->put('/accounts/' . $this->accountId . '/secondary_dns/tsigs/' . $tsigId, \FoundryCo\Cloudflare\Responses\SecondaryDNSTSIGTsig::class, $request);
	}


	/**
	 * Delete TSIG
	 */
	public function delete(string $tsigId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/secondary_dns/tsigs/' . $tsigId);
	}
}
