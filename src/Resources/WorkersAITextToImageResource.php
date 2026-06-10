<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkersAITextToImageResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Execute @cf/black-forest-labs/flux-1-schnell model.
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfBlackForestLabsFlux1SchnellRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/black-forest-labs/flux-1-schnell', null, $request);
	}


	/**
	 * Execute @cf/black-forest-labs/flux-2-dev model.
	 */
	public function flux2Dev(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfBlackForestLabsFlux2DevRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/black-forest-labs/flux-2-dev', null, $request);
	}


	/**
	 * Execute @cf/black-forest-labs/flux-2-klein-4b model.
	 */
	public function flux2Klein4b(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfBlackForestLabsFlux2Klein4bRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/black-forest-labs/flux-2-klein-4b', null, $request);
	}


	/**
	 * Execute @cf/black-forest-labs/flux-2-klein-9b model.
	 */
	public function flux2Klein9b(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfBlackForestLabsFlux2Klein9bRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/black-forest-labs/flux-2-klein-9b', null, $request);
	}


	/**
	 * Execute @cf/bytedance/stable-diffusion-xl-lightning model.
	 */
	public function stableDiffusionXlLightning(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfBytedanceStableDiffusionXlLightningRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/bytedance/stable-diffusion-xl-lightning', null, $request);
	}


	/**
	 * Execute @cf/leonardo/lucid-origin model.
	 */
	public function lucidOrigin(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfLeonardoLucidOriginRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/leonardo/lucid-origin', null, $request);
	}


	/**
	 * Execute @cf/leonardo/phoenix-1.0 model.
	 */
	public function phoenix10(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfLeonardoPhoenix10Request $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/leonardo/phoenix-1.0', null, $request);
	}


	/**
	 * Execute @cf/lykon/dreamshaper-8-lcm model.
	 */
	public function dreamshaper8Lcm(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfLykonDreamshaper8LcmRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/lykon/dreamshaper-8-lcm', null, $request);
	}


	/**
	 * Execute @cf/runwayml/stable-diffusion-v1-5-img2img model.
	 */
	public function stableDiffusionV15Img2img(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfRunwaymlStableDiffusionV15Img2imgRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/runwayml/stable-diffusion-v1-5-img2img', null, $request);
	}


	/**
	 * Execute @cf/runwayml/stable-diffusion-v1-5-inpainting model.
	 */
	public function stableDiffusionV15Inpainting(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfRunwaymlStableDiffusionV15InpaintingRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/runwayml/stable-diffusion-v1-5-inpainting', null, $request);
	}


	/**
	 * Execute @cf/stabilityai/stable-diffusion-xl-base-1.0 model.
	 */
	public function stableDiffusionXlBase10(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfStabilityaiStableDiffusionXlBase10Request $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/stabilityai/stable-diffusion-xl-base-1.0', null, $request);
	}


	/**
	 * Open Websocket connection with @cf/sven/test-pipe-http model.
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/run/@cf/sven/test-pipe-http', null, []);
	}
}
