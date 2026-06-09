<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkersAIDumbPipeResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Open Websocket connection with @cf/pipecat-ai/smart-turn-v2 model.
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/run/@cf/pipecat-ai/smart-turn-v2', null, []);
	}


	/**
	 * Open Websocket connection with @cf/pipecat-ai/smart-turn-v3 model.
	 */
	public function smartTurnV3(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/run/@cf/pipecat-ai/smart-turn-v3', null, []);
	}


	/**
	 * Open Websocket connection with @cf/test/hello-world-cog model.
	 */
	public function helloWorldCog(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/run/@cf/test/hello-world-cog', null, []);
	}
}
