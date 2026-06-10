<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkersAITranslationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Execute @cf/ai4bharat/indictrans2-en-indic-1B model.
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfAi4bharatIndictrans2EnIndic1BRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/ai4bharat/indictrans2-en-indic-1B', null, $request);
	}


	/**
	 * Execute @cf/ai4bharat/nonomni-indictrans2-en-indic-1b model.
	 */
	public function nonomniIndictrans2EnIndic1b(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfAi4bharatNonomniIndictrans2EnIndic1bRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/ai4bharat/nonomni-indictrans2-en-indic-1b', null, $request);
	}


	/**
	 * Execute @cf/meta/m2m100-1.2b model.
	 */
	public function m2m10012b(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/meta/m2m100-1.2b', null, null);
	}
}
