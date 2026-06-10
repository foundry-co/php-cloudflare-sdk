<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class InfrastructureAccessTargetsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List all targets
	 */
	public function list(
		?string $hostname = null,
		?string $hostnameContains = null,
		?string $virtualNetworkId = null,
		?string $ipV4 = null,
		?string $ipV6 = null,
		?\DateTimeImmutable $createdBefore = null,
		?\DateTimeImmutable $createdAfter = null,
		?\DateTimeImmutable $modifiedBefore = null,
		?\DateTimeImmutable $modifiedAfter = null,
		?array $ips = null,
		?array $targetIds = null,
		?string $ipLike = null,
		?string $ipv4Start = null,
		?string $ipv4End = null,
		?string $ipv6Start = null,
		?string $ipv6End = null,
		?int $page = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\InfrastructureAccessTargetsOrder $order = null,
		mixed $direction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/infrastructure/targets', \FoundryCo\Cloudflare\Responses\InfraTargetsList::class, ['hostname' => $hostname ?? null, 'hostnameContains' => $hostnameContains ?? null, 'virtualNetworkId' => $virtualNetworkId ?? null, 'ipV4' => $ipV4 ?? null, 'ipV6' => $ipV6 ?? null, 'createdBefore' => $createdBefore ?? null, 'createdAfter' => $createdAfter ?? null, 'modifiedBefore' => $modifiedBefore ?? null, 'modifiedAfter' => $modifiedAfter ?? null, 'ips' => $ips ?? null, 'targetIds' => $targetIds ?? null, 'ipLike' => $ipLike ?? null, 'ipv4Start' => $ipv4Start ?? null, 'ipv4End' => $ipv4End ?? null, 'ipv6Start' => $ipv6Start ?? null, 'ipv6End' => $ipv6End ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create new target
	 */
	public function create(\FoundryCo\Cloudflare\Requests\InfraTargetsPostRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/infrastructure/targets', \FoundryCo\Cloudflare\Responses\InfraTargetsPost::class, $request);
	}


	/**
	 * Create new targets
	 */
	public function update(): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/infrastructure/targets/batch', \FoundryCo\Cloudflare\Responses\InfraTargetsPutBatch::class, null);
	}


	/**
	 * Delete targets (Deprecated)
	 */
	public function delete(\FoundryCo\Cloudflare\Requests\InfraTargetsDeleteBatchRequest $request): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/infrastructure/targets/batch');
	}


	/**
	 * Delete targets
	 */
	public function batchDelete(\FoundryCo\Cloudflare\Requests\InfraTargetsDeleteBatchPostRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/infrastructure/targets/batch_delete', null, $request);
	}


	/**
	 * Get target
	 */
	public function get(string $targetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/infrastructure/targets/' . $targetId, \FoundryCo\Cloudflare\Responses\InfraTargetsGet::class, []);
	}


	/**
	 * Update target
	 */
	public function targets(string $targetId, \FoundryCo\Cloudflare\Requests\InfraTargetsPutRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/infrastructure/targets/' . $targetId, \FoundryCo\Cloudflare\Responses\InfraTargetsPut::class, $request);
	}


	/**
	 * Delete target
	 */
	public function infraTargetsDelete(string $targetId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/infrastructure/targets/' . $targetId);
	}
}
