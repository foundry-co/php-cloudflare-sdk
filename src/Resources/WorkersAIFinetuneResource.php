<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/finetunes', \FoundryCo\Cloudflare\Responses\WorkersAiListFinetunes::class, []);
	}


	/**
	 * Create a new Finetune
	 */
	public function create(\FoundryCo\Cloudflare\Requests\WorkersAiCreateFinetuneRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/finetunes', \FoundryCo\Cloudflare\Responses\WorkersAiCreateFinetune::class, $request);
	}


	/**
	 * List Public Finetunes
	 */
	public function public(?float $limit = null, ?float $offset = null, ?string $orderBy = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/finetunes/public', \FoundryCo\Cloudflare\Responses\WorkersAiListPublicFinetunes::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null, 'orderBy' => $orderBy ?? null]);
	}


	/**
	 * Upload a Finetune Asset
	 */
	public function finetuneAssets(string $finetuneId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/finetunes/' . $finetuneId . '/finetune-assets', null, null);
	}
}
