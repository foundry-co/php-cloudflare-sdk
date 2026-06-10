<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class UserBillingHistoryResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Billing History Details
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\UserBillingHistoryOrder $order = null,
		?\DateTimeImmutable $occurredAt = null,
		?string $type = null,
		?string $action = null,
	): mixed
	{
		return $this->client->get('/user/billing/history', \FoundryCo\Cloudflare\Responses\UserBillingHistoryDeprecatedBillingHistoryDetails::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'occurredAt' => $occurredAt ?? null, 'type' => $type ?? null, 'action' => $action ?? null]);
	}
}
