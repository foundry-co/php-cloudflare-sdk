<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ClientVersionsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List client versions
	 */
	public function list(
		?string $targetEnvironment = null,
		?\FoundryCo\Cloudflare\Enums\ClientVersionsReleaseTrack $releaseTrack = null,
		?int $page = null,
		?int $perPage = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/client-versions', \FoundryCo\Cloudflare\Responses\ListClientVersions::class, ['targetEnvironment' => $targetEnvironment ?? null, 'releaseTrack' => $releaseTrack ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * List available target environments
	 */
	public function targetEnvironments(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/client-versions/target-environments', \FoundryCo\Cloudflare\Responses\ListClientTargetEnvironments::class, []);
	}
}
