<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class OnRampsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List On-ramps
	 */
	public function list(?string $orderBy = null, ?bool $desc = null, ?bool $status = null, ?bool $vpcs = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cloud/onramps', \FoundryCo\Cloudflare\Responses\OnrampsList::class, ['orderBy' => $orderBy ?? null, 'desc' => $desc ?? null, 'status' => $status ?? null, 'vpcs' => $vpcs ?? null]);
	}


	/**
	 * Create On-ramp
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\OnrampsCreateRequest $request,
		?string $forwarded = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/cloud/onramps', \FoundryCo\Cloudflare\Responses\OnrampsCreate::class, $request);
	}


	/**
	 * Read Magic WAN Address Space
	 */
	public function magicWanAddressSpace(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cloud/onramps/magic_wan_address_space', \FoundryCo\Cloudflare\Responses\OnrampsMwanAddrSpaceRead::class, []);
	}


	/**
	 * Update Magic WAN Address Space
	 */
	public function update(\FoundryCo\Cloudflare\Requests\OnrampsMwanAddrSpaceUpdateRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/cloud/onramps/magic_wan_address_space', \FoundryCo\Cloudflare\Responses\OnrampsMwanAddrSpaceUpdate::class, $request);
	}


	/**
	 * Patch Magic WAN Address Space
	 */
	public function onrampsMwanAddrSpacePatch(
		\FoundryCo\Cloudflare\Requests\OnrampsMwanAddrSpacePatchRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/cloud/onramps/magic_wan_address_space', \FoundryCo\Cloudflare\Responses\OnrampsMwanAddrSpacePatch::class, $request);
	}


	/**
	 * Read On-ramp
	 */
	public function get(
		string $onrampId,
		?bool $status = null,
		?bool $vpcs = null,
		?bool $postApplyResources = null,
		?bool $plannedResources = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cloud/onramps/' . $onrampId, \FoundryCo\Cloudflare\Responses\OnrampsRead::class, ['status' => $status ?? null, 'vpcs' => $vpcs ?? null, 'postApplyResources' => $postApplyResources ?? null, 'plannedResources' => $plannedResources ?? null]);
	}


	/**
	 * Update On-ramp
	 */
	public function onramps(string $onrampId, \FoundryCo\Cloudflare\Requests\OnrampsUpdateRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/cloud/onramps/' . $onrampId, \FoundryCo\Cloudflare\Responses\OnrampsUpdate::class, $request);
	}


	/**
	 * Patch On-ramp
	 */
	public function onrampsPatch(string $onrampId, \FoundryCo\Cloudflare\Requests\OnrampsPatchRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/cloud/onramps/' . $onrampId, \FoundryCo\Cloudflare\Responses\OnrampsPatch::class, $request);
	}


	/**
	 * Delete On-ramp
	 */
	public function delete(string $onrampId, ?bool $destroy = null, ?bool $force = null): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/cloud/onramps/' . $onrampId);
	}


	/**
	 * Apply On-ramp
	 */
	public function apply(string $onrampId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/cloud/onramps/' . $onrampId . '/apply', null, null);
	}


	/**
	 * Export as Terraform
	 */
	public function export(string $onrampId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/cloud/onramps/' . $onrampId . '/export', null, null);
	}


	/**
	 * Plan On-ramp
	 */
	public function plan(string $onrampId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/cloud/onramps/' . $onrampId . '/plan', null, null);
	}
}
