<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/secondary_dns/tsigs', \FoundryCo\Cloudflare\Responses\SecondaryDnsTsigListTsiGs::class, []);
	}


	/**
	 * Create TSIG
	 */
	public function create(\FoundryCo\Cloudflare\Requests\SecondaryDnsTsigCreateTsigRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/secondary_dns/tsigs', \FoundryCo\Cloudflare\Responses\SecondaryDnsTsigCreateTsig::class, $request);
	}


	/**
	 * TSIG Details
	 */
	public function get(string $tsigId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/secondary_dns/tsigs/' . $tsigId, \FoundryCo\Cloudflare\Responses\SecondaryDnsTsigTsigDetails::class, []);
	}


	/**
	 * Update TSIG
	 */
	public function update(
		string $tsigId,
		\FoundryCo\Cloudflare\Requests\SecondaryDnsTsigUpdateTsigRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/secondary_dns/tsigs/' . $tsigId, \FoundryCo\Cloudflare\Responses\SecondaryDnsTsigUpdateTsig::class, $request);
	}


	/**
	 * Delete TSIG
	 */
	public function delete(string $tsigId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/secondary_dns/tsigs/' . $tsigId);
	}
}
