<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustGatewayOperationsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Zero Trust Gateway operations
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/operations', \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayOperationsListZeroTrustGatewayOperations::class, []);
	}


	/**
	 * Zero Trust Gateway operation details
	 */
	public function get(string $operationId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/operations/' . $operationId, \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayOperationsZeroTrustGatewayOperationDetails::class, []);
	}
}
