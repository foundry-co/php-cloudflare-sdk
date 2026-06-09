<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class EmailAuthResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get DMARC Report Status
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\EmailAuthStatus
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/auth/dmarc-reports', \FoundryCo\Cloudflare\Responses\EmailAuthStatus::class, []);
	}


	/**
	 * Configure DMARC Reports
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ConfigureDmarcReportsRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailAuthReports
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/email/auth/dmarc-reports', \FoundryCo\Cloudflare\Responses\EmailAuthReports::class, $request);
	}


	/**
	 * Inspect SPF Record
	 */
	public function inspect(?string $id = null): \FoundryCo\Cloudflare\Responses\EmailAuthSpf
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/auth/spf/inspect', \FoundryCo\Cloudflare\Responses\EmailAuthSpf::class, ['id' => $id ?? null]);
	}
}
