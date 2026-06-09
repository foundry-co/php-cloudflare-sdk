<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicNetworkMonitoringVPCFlowLogsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Generate authentication token for VPC flow logs export.
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/mnm/vpc-flows/token', null, null);
	}
}
