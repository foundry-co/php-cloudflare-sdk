<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccessSCIMUpdateLogsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Access SCIM update logs
	 */
	public function list(
		?int $limit = null,
		?\FoundryCo\Cloudflare\Enums\AccessSCIMUpdateLogsDirection $direction = null,
		?\DateTimeImmutable $since = null,
		?\DateTimeImmutable $until = null,
		?array $idpId = null,
		?array $status = null,
		?array $resourceType = null,
		?array $requestMethod = null,
		?array $resourceUserEmail = null,
		?array $resourceGroupName = null,
		?array $cfResourceId = null,
		?array $idpResourceId = null,
		?int $page = null,
		?int $perPage = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/logs/scim/updates', \FoundryCo\Cloudflare\Responses\AccessScimUpdateLogsListAccessScimUpdateLogs::class, ['limit' => $limit ?? null, 'direction' => $direction ?? null, 'since' => $since ?? null, 'until' => $until ?? null, 'idpId' => $idpId ?? null, 'status' => $status ?? null, 'resourceType' => $resourceType ?? null, 'requestMethod' => $requestMethod ?? null, 'resourceUserEmail' => $resourceUserEmail ?? null, 'resourceGroupName' => $resourceGroupName ?? null, 'cfResourceId' => $cfResourceId ?? null, 'idpResourceId' => $idpResourceId ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}
}
