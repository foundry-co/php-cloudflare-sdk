<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarIPResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get IP address details
	 */
	public function list(
		?string $ip = null,
		?\FoundryCo\Cloudflare\Enums\RadarIPFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarIPIp
	{
		return $this->client->get('/radar/entities/ip', \FoundryCo\Cloudflare\Responses\RadarIPIp::class, ['ip' => $ip ?? null, 'format' => $format ?? null]);
	}
}
