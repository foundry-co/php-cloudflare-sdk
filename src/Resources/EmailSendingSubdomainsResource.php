<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class EmailSendingSubdomainsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List sending subdomains
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/sending/subdomains', \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsListSendingSubdomains::class, []);
	}


	/**
	 * Create a sending subdomain
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\EmailSendingSubdomainsCreateSendingSubdomainRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/email/sending/subdomains', \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsCreateSendingSubdomain::class, $request);
	}


	/**
	 * Preview sending subdomain DNS
	 */
	public function preview(
		\FoundryCo\Cloudflare\Requests\EmailSendingSubdomainsPreviewSendingSubdomainRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/email/sending/subdomains/preview', \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsPreviewSendingSubdomain::class, $request);
	}


	/**
	 * Get a sending subdomain
	 */
	public function get(string $subdomainId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/sending/subdomains/' . $subdomainId, \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsGetSendingSubdomain::class, []);
	}


	/**
	 * Delete a sending subdomain
	 */
	public function delete(string $subdomainId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/email/sending/subdomains/' . $subdomainId);
	}


	/**
	 * Get sending subdomain DNS records
	 */
	public function dns(string $subdomainId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/sending/subdomains/' . $subdomainId . '/dns', \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsGetSendingSubdomainDns::class, []);
	}


	/**
	 * Fix sending subdomain DNS records
	 */
	public function emailSendingSubdomainsFixSendingSubdomainDns(string $subdomainId): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/email/sending/subdomains/' . $subdomainId . '/dns', \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsFixSendingSubdomainDns::class, null);
	}


	/**
	 * Get sending subdomain DNS status
	 */
	public function status(string $subdomainId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/sending/subdomains/' . $subdomainId . '/dns/status', \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsGetSendingSubdomainDnsStatus::class, []);
	}
}
