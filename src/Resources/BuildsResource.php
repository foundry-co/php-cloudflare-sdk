<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class BuildsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get builds by version IDs
	 */
	public function list(?string $versionIds = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/builds/builds', null, ['versionIds' => $versionIds ?? null]);
	}


	/**
	 * Get latest builds by script IDs
	 */
	public function latest(?string $externalScriptIds = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/builds/builds/latest', null, ['externalScriptIds' => $externalScriptIds ?? null]);
	}


	/**
	 * Get build by UUID
	 */
	public function get(string $buildUuid): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/builds/builds/' . $buildUuid, null, []);
	}


	/**
	 * Cancel build
	 */
	public function update(string $buildUuid): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/builds/builds/' . $buildUuid . '/cancel', null, null);
	}


	/**
	 * Get build logs
	 */
	public function logs(string $buildUuid, ?string $cursor = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/builds/builds/' . $buildUuid . '/logs', null, ['cursor' => $cursor ?? null]);
	}
}
