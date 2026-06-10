<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WarpTeamsDeviceApiOtherResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get override codes
	 */
	public function get(string $registrationId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/registrations/' . $registrationId . '/override_codes', \FoundryCo\Cloudflare\Responses\GetRegistrationOverrideCodes::class, []);
	}
}
