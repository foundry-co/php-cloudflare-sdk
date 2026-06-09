<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkersAIAutomaticSpeechRecognitionResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Open Websocket connection with @cf/deepgram/flux model.
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/run/@cf/deepgram/flux', null, []);
	}


	/**
	 * Execute @cf/deepgram/flux model.
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfDeepgramFluxRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/deepgram/flux', null, $request);
	}


	/**
	 * Open Websocket connection with @cf/deepgram/nova-3 model.
	 */
	public function nova3(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/run/@cf/deepgram/nova-3', null, []);
	}


	/**
	 * Execute @cf/deepgram/nova-3 model.
	 */
	public function workersAiPostRunCfDeepgramNova3(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfDeepgramNova3Request $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/deepgram/nova-3', null, $request);
	}


	/**
	 * Open Websocket connection with @cf/deepgram/nova-3-internal model.
	 */
	public function nova3Internal(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/run/@cf/deepgram/nova-3-internal', null, []);
	}


	/**
	 * Open Websocket connection with @cf/deepgram/nova-3-ws model.
	 */
	public function nova3Ws(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/run/@cf/deepgram/nova-3-ws', null, []);
	}


	/**
	 * Open Websocket connection with @cf/nvidia/nemotron-speech-streaming-en-0.6b model.
	 */
	public function nemotronSpeechStreamingEn06b(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/run/@cf/nvidia/nemotron-speech-streaming-en-0.6b', null, []);
	}


	/**
	 * Execute @cf/openai/whisper model.
	 */
	public function whisper(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/openai/whisper', null, null);
	}


	/**
	 * Execute @cf/openai/whisper-large-v3-turbo model.
	 */
	public function whisperLargeV3Turbo(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfOpenaiWhisperLargeV3TurboRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/openai/whisper-large-v3-turbo', null, $request);
	}


	/**
	 * Execute @cf/openai/whisper-tiny-en model.
	 */
	public function whisperTinyEn(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/openai/whisper-tiny-en', null, null);
	}
}
