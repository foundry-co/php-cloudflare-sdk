<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class PassiveDNSByIPResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get Passive DNS by IP
	 */
	public function list(
		?\FoundryCo\Cloudflare\Responses\PassiveDNSByIPStartEndParams $startEndParams = null,
		?string $ipv4 = null,
		?float $page = null,
		?float $perPage = null,
	): \FoundryCo\Cloudflare\Responses\PassiveDNSByIPIp
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/dns', \FoundryCo\Cloudflare\Responses\PassiveDNSByIPIp::class, ['startEndParams' => $startEndParams ?? null, 'ipv4' => $ipv4 ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}
}
