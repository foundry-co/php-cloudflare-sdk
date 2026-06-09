<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class NotificationHistoryResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List History
	 */
	public function list(
		?float $perPage = null,
		?\DateTimeImmutable $before = null,
		?float $page = null,
		?\DateTimeImmutable $since = null,
	): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->get('/accounts/' . $this->accountId . '/alerting/v3/history', \FoundryCo\Cloudflare\Responses\NotificationHistoryHistory::class, ['perPage' => $perPage ?? null, 'before' => $before ?? null, 'page' => $page ?? null, 'since' => $since ?? null]);
	}
}
