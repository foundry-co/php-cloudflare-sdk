<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WHOISRecordResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get WHOIS Record
	 */
	public function list(?string $domain = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/whois', \FoundryCo\Cloudflare\Responses\WhoisRecordGetWhoisRecord::class, ['domain' => $domain ?? null]);
	}
}
