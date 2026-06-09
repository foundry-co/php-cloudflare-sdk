<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkersAITextToSpeechResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Open Websocket connection with @cf/deepgram/aura model.
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/run/@cf/deepgram/aura', null, []);
	}


	/**
	 * Open Websocket connection with @cf/deepgram/aura-1 model.
	 */
	public function aura1(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/run/@cf/deepgram/aura-1', null, []);
	}


	/**
	 * Execute @cf/deepgram/aura-1 model.
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfDeepgramAura1Request $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/deepgram/aura-1', null, $request);
	}


	/**
	 * Open Websocket connection with @cf/deepgram/aura-1-internal model.
	 */
	public function aura1Internal(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/run/@cf/deepgram/aura-1-internal', null, []);
	}


	/**
	 * Open Websocket connection with @cf/deepgram/aura-2 model.
	 */
	public function aura2(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/run/@cf/deepgram/aura-2', null, []);
	}


	/**
	 * Open Websocket connection with @cf/deepgram/aura-2-en model.
	 */
	public function aura2En(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/run/@cf/deepgram/aura-2-en', null, []);
	}


	/**
	 * Execute @cf/deepgram/aura-2-en model.
	 */
	public function workersAiPostRunCfDeepgramAura2En(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfDeepgramAura2EnRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/deepgram/aura-2-en', null, $request);
	}


	/**
	 * Open Websocket connection with @cf/deepgram/aura-2-en-ws model.
	 */
	public function aura2EnWs(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/run/@cf/deepgram/aura-2-en-ws', null, []);
	}


	/**
	 * Open Websocket connection with @cf/deepgram/aura-2-es model.
	 */
	public function aura2Es(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/run/@cf/deepgram/aura-2-es', null, []);
	}


	/**
	 * Execute @cf/deepgram/aura-2-es model.
	 */
	public function workersAiPostRunCfDeepgramAura2Es(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfDeepgramAura2EsRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/deepgram/aura-2-es', null, $request);
	}


	/**
	 * Execute @cf/myshell-ai/melotts model.
	 */
	public function melotts(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfMyshellAiMelottsRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/myshell-ai/melotts', null, $request);
	}
}
