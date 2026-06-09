<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkersAISummarizationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Execute @cf/facebook/bart-large-cnn model.
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfFacebookBartLargeCnnRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/facebook/bart-large-cnn', null, $request);
	}


	/**
	 * Execute @cf/facebook/nonomni-bart-large-cnn model.
	 */
	public function nonomniBartLargeCnn(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfFacebookNonomniBartLargeCnnRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/facebook/nonomni-bart-large-cnn', null, $request);
	}
}
