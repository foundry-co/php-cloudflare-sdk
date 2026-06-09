<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DeploymentsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get credentials to SSH into a Container
	 */
	public function get(string $instanceId): \FoundryCo\Cloudflare\Responses\DeploymentsContainerWranglerSsh
	{
		return $this->client->get('/accounts/' . $this->accountId . '/containers/instances/' . $instanceId . '/ssh', \FoundryCo\Cloudflare\Responses\DeploymentsContainerWranglerSsh::class, []);
	}
}
