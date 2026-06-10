<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class LogoMatchResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Read matches for logo queries by ID
	 */
	public function list(?array $logoId = null, ?string $offset = null, ?string $limit = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/brand-protection/logo-matches', null, ['logoId' => $logoId ?? null, 'offset' => $offset ?? null, 'limit' => $limit ?? null]);
	}


	/**
	 * Download matches for logo queries by ID
	 */
	public function download(?array $logoId = null, ?string $offset = null, ?string $limit = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/brand-protection/logo-matches/download', null, ['logoId' => $logoId ?? null, 'offset' => $offset ?? null, 'limit' => $limit ?? null]);
	}


	/**
	 * Read all saved logo queries
	 */
	public function logos(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/brand-protection/logos', null, []);
	}


	/**
	 * Create new saved logo queries from image files
	 */
	public function create(?string $tag = null, ?string $matchType = null, ?float $threshold = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/brand-protection/logos', null, null);
	}


	/**
	 * Read saved logo queries by ID
	 */
	public function get(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/brand-protection/logos/' . $logoId, null, []);
	}


	/**
	 * Delete saved logo queries by ID
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/brand-protection/logos/' . $logoId);
	}


	/**
	 * Create new logo queries from image files
	 */
	public function scanLogo(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/brand-protection/scan-logo', null, null);
	}


	/**
	 * Create new logo queries from URLs
	 */
	public function scanPage(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/brand-protection/scan-page', null, null);
	}


	/**
	 * Internal route for testing signed URLs
	 */
	public function signedUrl(): mixed
	{
		return $this->client->get('/signed-url', null, []);
	}
}
