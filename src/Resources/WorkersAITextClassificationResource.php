<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkersAITextClassificationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Execute @cf/baai/bge-reranker-base model.
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfBaaiBgeRerankerBaseRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/baai/bge-reranker-base', null, $request);
	}


	/**
	 * Execute @cf/huggingface/distilbert-sst-2-int8 model.
	 */
	public function distilbertSst2Int8(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfHuggingfaceDistilbertSst2Int8Request $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/huggingface/distilbert-sst-2-int8', null, $request);
	}


	/**
	 * Execute @cf/huggingface/nonomni-distilbert-sst-2-int8 model.
	 */
	public function nonomniDistilbertSst2Int8(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfHuggingfaceNonomniDistilbertSst2Int8Request $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/huggingface/nonomni-distilbert-sst-2-int8', null, $request);
	}
}
