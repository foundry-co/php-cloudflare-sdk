<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustApplicationsReviewStatusResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List applications review statuses
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/apps/review_status', \FoundryCo\Cloudflare\Responses\ZeroTrustApplicationsReviewStatusList::class, []);
	}


	/**
	 * Update applications review statuses
	 */
	public function update(\FoundryCo\Cloudflare\Requests\ZeroTrustApplicationsReviewStatusUpdateRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/gateway/apps/review_status', \FoundryCo\Cloudflare\Responses\ZeroTrustApplicationsReviewStatusUpdate::class, $request);
	}
}
