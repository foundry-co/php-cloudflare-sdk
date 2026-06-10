<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/auth/dmarc-reports', \FoundryCo\Cloudflare\Responses\GetDmarcReportsStatus::class, []);
	}


	/**
	 * Configure DMARC Reports
	 */
	public function update(\FoundryCo\Cloudflare\Requests\ConfigureDmarcReportsRequest $request): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/email/auth/dmarc-reports', \FoundryCo\Cloudflare\Responses\ConfigureDmarcReports::class, $request);
	}


	/**
	 * Inspect SPF Record
	 */
	public function inspect(?string $id = null): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/auth/spf/inspect', \FoundryCo\Cloudflare\Responses\InspectSpf::class, ['id' => $id ?? null]);
	}
}
