<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WARPChangeEventsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List WARP change events.
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
		?string $from = null,
		?string $to = null,
		?\FoundryCo\Cloudflare\Enums\WARPChangeEventsType $type = null,
		?\FoundryCo\Cloudflare\Enums\WARPChangeEventsToggle $toggle = null,
		?string $configName = null,
		?string $accountName = null,
		?\FoundryCo\Cloudflare\Enums\WARPChangeEventsSortOrder $sortOrder = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/warp-change-events', null, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'from' => $from ?? null, 'to' => $to ?? null, 'type' => $type ?? null, 'toggle' => $toggle ?? null, 'configName' => $configName ?? null, 'accountName' => $accountName ?? null, 'sortOrder' => $sortOrder ?? null]);
	}
}
