<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustSubnetsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Subnets
	 */
	public function list(
		?string $name = null,
		?string $comment = null,
		mixed $network = null,
		?string $existedAt = null,
		?\FoundryCo\Cloudflare\Enums\ZeroTrustSubnetsAddressFamily $addressFamily = null,
		?bool $isDefaultNetwork = null,
		?bool $isDeleted = null,
		?\FoundryCo\Cloudflare\Enums\ZeroTrustSubnetsSortOrder $sortOrder = null,
		?\FoundryCo\Cloudflare\Enums\ZeroTrustSubnetsSubnetTypes $subnetTypes = null,
		?float $perPage = null,
		?float $page = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/zerotrust/subnets', \FoundryCo\Cloudflare\Responses\ZeroTrustNetworksSubnetsList::class, ['name' => $name ?? null, 'comment' => $comment ?? null, 'network' => $network ?? null, 'existedAt' => $existedAt ?? null, 'addressFamily' => $addressFamily ?? null, 'isDefaultNetwork' => $isDefaultNetwork ?? null, 'isDeleted' => $isDeleted ?? null, 'sortOrder' => $sortOrder ?? null, 'subnetTypes' => $subnetTypes ?? null, 'perPage' => $perPage ?? null, 'page' => $page ?? null]);
	}


	/**
	 * Update Cloudflare Source Subnet
	 */
	public function update(
		\FoundryCo\Cloudflare\Enums\ZeroTrustSubnetsAddressFamily $addressFamily,
		\FoundryCo\Cloudflare\Requests\ZeroTrustNetworksSubnetUpdateCloudflareSourceRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/zerotrust/subnets/cloudflare_source/' . $addressFamily, null, $request);
	}


	/**
	 * Create WARP IP subnet
	 */
	public function create(\FoundryCo\Cloudflare\Requests\ZeroTrustNetworksSubnetCreateWarpRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/zerotrust/subnets/warp', null, $request);
	}


	/**
	 * Get WARP IP subnet
	 */
	public function get(string $subnetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/zerotrust/subnets/warp/' . $subnetId, null, []);
	}


	/**
	 * Update WARP IP subnet
	 */
	public function warp(
		string $subnetId,
		\FoundryCo\Cloudflare\Requests\ZeroTrustNetworksSubnetUpdateWarpRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/zerotrust/subnets/warp/' . $subnetId, null, $request);
	}


	/**
	 * Delete WARP IP subnet
	 */
	public function delete(string $subnetId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/zerotrust/subnets/warp/' . $subnetId);
	}
}
