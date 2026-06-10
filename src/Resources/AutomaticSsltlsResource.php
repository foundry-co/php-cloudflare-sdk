<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AutomaticSsltlsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get Automatic SSL/TLS enrollment status for the given zone
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/settings/ssl_automatic_mode', \FoundryCo\Cloudflare\Responses\SslDetectorAutomaticModeGetEnrollment::class, []);
	}


	/**
	 * Patch Automatic SSL/TLS Enrollment status for given zone
	 */
	public function update(\FoundryCo\Cloudflare\Requests\SslDetectorAutomaticModePatchEnrollmentRequest $request): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/settings/ssl_automatic_mode', \FoundryCo\Cloudflare\Responses\SslDetectorAutomaticModePatchEnrollment::class, $request);
	}
}
