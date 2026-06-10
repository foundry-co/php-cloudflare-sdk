<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkersAITextEmbeddingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Execute @cf/baai/bge-base-en-v1.5 model.
	 */
	public function create(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/baai/bge-base-en-v1.5', null, null);
	}


	/**
	 * Execute @cf/baai/bge-large-en-v1.5 model.
	 */
	public function bgeLargeEnV15(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/baai/bge-large-en-v1.5', null, null);
	}


	/**
	 * Execute @cf/baai/bge-m3 model.
	 */
	public function bgeM3(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/baai/bge-m3', null, null);
	}


	/**
	 * Execute @cf/baai/bge-small-en-v1.5 model.
	 */
	public function bgeSmallEnV15(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/baai/bge-small-en-v1.5', null, null);
	}


	/**
	 * Execute @cf/baai/nonomni-bge-base-en-v1.5 model.
	 */
	public function nonomniBgeBaseEnV15(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/baai/nonomni-bge-base-en-v1.5', null, null);
	}


	/**
	 * Execute @cf/baai/nonomni-bge-large-en-v1.5 model.
	 */
	public function nonomniBgeLargeEnV15(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/baai/nonomni-bge-large-en-v1.5', null, null);
	}


	/**
	 * Execute @cf/baai/nonomni-bge-m3 model.
	 */
	public function nonomniBgeM3(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/baai/nonomni-bge-m3', null, null);
	}


	/**
	 * Execute @cf/baai/nonomni-bge-small-en-v1.5 model.
	 */
	public function nonomniBgeSmallEnV15(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/baai/nonomni-bge-small-en-v1.5', null, null);
	}


	/**
	 * Execute @cf/google/embeddinggemma-300m model.
	 */
	public function embeddinggemma300m(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfGoogleEmbeddinggemma300mRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/google/embeddinggemma-300m', null, $request);
	}


	/**
	 * Execute @cf/google/nonomni-embeddinggemma-300m model.
	 */
	public function nonomniEmbeddinggemma300m(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfGoogleNonomniEmbeddinggemma300mRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/google/nonomni-embeddinggemma-300m', null, $request);
	}


	/**
	 * Execute @cf/pfnet/plamo-embedding-1b model.
	 */
	public function plamoEmbedding1b(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfPfnetPlamoEmbedding1bRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/pfnet/plamo-embedding-1b', null, $request);
	}


	/**
	 * Execute @cf/qwen/qwen3-embedding-0.6b model.
	 */
	public function qwen3Embedding06b(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfQwenQwen3Embedding06bRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/qwen/qwen3-embedding-0.6b', null, $request);
	}
}
