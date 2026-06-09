<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class StreamVideoClippingResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Clip videos given a start and end time
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\StreamVideoClippingClipVideosGivenAStartAndEndTimeRequest $request,
	): \FoundryCo\Cloudflare\Responses\StreamVideoClippingTime
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream/clip', \FoundryCo\Cloudflare\Responses\StreamVideoClippingTime::class, $request);
	}
}
