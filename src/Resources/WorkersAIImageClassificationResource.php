<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkersAIImageClassificationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Execute @cf/microsoft/nonomni-resnet-50 model.
	 */
	public function create(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/microsoft/nonomni-resnet-50', null, null);
	}


	/**
	 * Execute @cf/microsoft/resnet-50 model.
	 */
	public function resnet50(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/microsoft/resnet-50', null, null);
	}
}
