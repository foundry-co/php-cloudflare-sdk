<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkersAIFinetuneResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Finetunes
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\WorkersAIFinetuneFinetunes
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/finetunes', \FoundryCo\Cloudflare\Responses\WorkersAIFinetuneFinetunes::class, []);
	}


	/**
	 * Create a new Finetune
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\WorkersAiCreateFinetuneRequest $request,
	): \FoundryCo\Cloudflare\Responses\WorkersAIFinetuneFinetune
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/finetunes', \FoundryCo\Cloudflare\Responses\WorkersAIFinetuneFinetune::class, $request);
	}


	/**
	 * List Public Finetunes
	 */
	public function public(
		?float $limit = null,
		?float $offset = null,
		?string $orderBy = null,
	): \FoundryCo\Cloudflare\Responses\WorkersAIFinetuneFinetunes
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/finetunes/public', \FoundryCo\Cloudflare\Responses\WorkersAIFinetuneFinetunes::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null, 'orderBy' => $orderBy ?? null]);
	}


	/**
	 * Upload a Finetune Asset
	 */
	public function finetuneAssets(string $finetuneId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/finetunes/' . $finetuneId . '/finetune-assets', null, null);
	}
}
