<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsSubdomains
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/sending/subdomains', \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsSubdomains::class, []);
	}


	/**
	 * Create a sending subdomain
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\EmailSendingSubdomainsCreateSendingSubdomainRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsSubdomain
	{
		return $this->client->post('/zones/' . $this->zoneId . '/email/sending/subdomains', \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsSubdomain::class, $request);
	}


	/**
	 * Preview sending subdomain DNS
	 */
	public function preview(
		\FoundryCo\Cloudflare\Requests\EmailSendingSubdomainsPreviewSendingSubdomainRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsSubdomain
	{
		return $this->client->post('/zones/' . $this->zoneId . '/email/sending/subdomains/preview', \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsSubdomain::class, $request);
	}


	/**
	 * Get a sending subdomain
	 */
	public function get(string $subdomainId): \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsSubdomain
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/sending/subdomains/' . $subdomainId, \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsSubdomain::class, []);
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
	public function dns(string $subdomainId): \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsDns
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/sending/subdomains/' . $subdomainId . '/dns', \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsDns::class, []);
	}


	/**
	 * Fix sending subdomain DNS records
	 */
	public function emailSendingSubdomainsFixSendingSubdomainDns(
		string $subdomainId,
	): \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsDns
	{
		return $this->client->post('/zones/' . $this->zoneId . '/email/sending/subdomains/' . $subdomainId . '/dns', \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsDns::class, null);
	}


	/**
	 * Get sending subdomain DNS status
	 */
	public function status(string $subdomainId): \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsStatus
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/sending/subdomains/' . $subdomainId . '/dns/status', \FoundryCo\Cloudflare\Responses\EmailSendingSubdomainsStatus::class, []);
	}
}
