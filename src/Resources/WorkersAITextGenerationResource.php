<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkersAITextGenerationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Execute @cf/aisingapore/gemma-sea-lion-v4-27b-it model.
	 */
	public function create(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/aisingapore/gemma-sea-lion-v4-27b-it', null, null);
	}


	/**
	 * Execute @cf/deepseek-ai/deepseek-math-7b-instruct model.
	 */
	public function deepseekMath7bInstruct(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/deepseek-ai/deepseek-math-7b-instruct', null, null);
	}


	/**
	 * Execute @cf/deepseek-ai/deepseek-r1-distill-qwen-32b model.
	 */
	public function deepseekR1DistillQwen32b(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/deepseek-ai/deepseek-r1-distill-qwen-32b', null, null);
	}


	/**
	 * Execute @cf/defog/sqlcoder-7b-2 model.
	 */
	public function sqlcoder7b2(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/defog/sqlcoder-7b-2', null, null);
	}


	/**
	 * Execute @cf/fblgit/una-cybertron-7b-v2-bf16 model.
	 */
	public function unaCybertron7bV2Bf16(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/fblgit/una-cybertron-7b-v2-bf16', null, null);
	}


	/**
	 * Execute @cf/google/gemma-2b-it-lora model.
	 */
	public function gemma2bItLora(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/google/gemma-2b-it-lora', null, null);
	}


	/**
	 * Execute @cf/google/gemma-3-12b-it model.
	 */
	public function gemma312bIt(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/google/gemma-3-12b-it', null, null);
	}


	/**
	 * Execute @cf/google/gemma-4-26b-a4b-it model.
	 */
	public function gemma426bA4bIt(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/google/gemma-4-26b-a4b-it', null, null);
	}


	/**
	 * Execute @cf/google/gemma-7b-it-lora model.
	 */
	public function gemma7bItLora(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/google/gemma-7b-it-lora', null, null);
	}


	/**
	 * Execute @cf/ibm-granite/granite-4.0-h-micro model.
	 */
	public function granite40HMicro(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/ibm-granite/granite-4.0-h-micro', null, null);
	}


	/**
	 * Execute @cf/meta-llama/llama-2-7b-chat-hf-lora model.
	 */
	public function llama27bChatHfLora(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/meta-llama/llama-2-7b-chat-hf-lora', null, null);
	}


	/**
	 * Execute @cf/meta/llama-2-7b-chat-fp16 model.
	 */
	public function llama27bChatFp16(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/meta/llama-2-7b-chat-fp16', null, null);
	}


	/**
	 * Execute @cf/meta/llama-2-7b-chat-int8 model.
	 */
	public function llama27bChatInt8(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/meta/llama-2-7b-chat-int8', null, null);
	}


	/**
	 * Execute @cf/meta/llama-3-8b-instruct model.
	 */
	public function llama38bInstruct(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/meta/llama-3-8b-instruct', null, null);
	}


	/**
	 * Execute @cf/meta/llama-3-8b-instruct-awq model.
	 */
	public function llama38bInstructAwq(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/meta/llama-3-8b-instruct-awq', null, null);
	}


	/**
	 * Execute @cf/meta/llama-3.1-70b-instruct-fp8-fast model.
	 */
	public function llama3170bInstructFp8Fast(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/meta/llama-3.1-70b-instruct-fp8-fast', null, null);
	}


	/**
	 * Execute @cf/meta/llama-3.1-8b-instruct-awq model.
	 */
	public function llama318bInstructAwq(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/meta/llama-3.1-8b-instruct-awq', null, null);
	}


	/**
	 * Execute @cf/meta/llama-3.1-8b-instruct-fp8 model.
	 */
	public function llama318bInstructFp8(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/meta/llama-3.1-8b-instruct-fp8', null, null);
	}


	/**
	 * Execute @cf/meta/llama-3.1-8b-instruct-fp8-fast model.
	 */
	public function llama318bInstructFp8Fast(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/meta/llama-3.1-8b-instruct-fp8-fast', null, null);
	}


	/**
	 * Execute @cf/meta/llama-3.2-11b-vision-instruct model.
	 */
	public function llama3211bVisionInstruct(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/meta/llama-3.2-11b-vision-instruct', null, null);
	}


	/**
	 * Execute @cf/meta/llama-3.2-1b-instruct model.
	 */
	public function llama321bInstruct(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/meta/llama-3.2-1b-instruct', null, null);
	}


	/**
	 * Execute @cf/meta/llama-3.2-3b-instruct model.
	 */
	public function llama323bInstruct(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/meta/llama-3.2-3b-instruct', null, null);
	}


	/**
	 * Execute @cf/meta/llama-3.3-70b-instruct-fp8-fast model.
	 */
	public function llama3370bInstructFp8Fast(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/meta/llama-3.3-70b-instruct-fp8-fast', null, null);
	}


	/**
	 * Execute @cf/meta/llama-4-scout-17b-16e-instruct model.
	 */
	public function llama4Scout17b16eInstruct(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/meta/llama-4-scout-17b-16e-instruct', null, null);
	}


	/**
	 * Execute @cf/meta/llama-guard-3-8b model.
	 */
	public function llamaGuard38b(
		\FoundryCo\Cloudflare\Requests\WorkersAiPostRunCfMetaLlamaGuard38bRequest $request,
		?string $queueRequest = null,
		?string $tags = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/meta/llama-guard-3-8b', null, $request);
	}


	/**
	 * Execute @cf/microsoft/phi-2 model.
	 */
	public function phi2(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/microsoft/phi-2', null, null);
	}


	/**
	 * Execute @cf/mistral/mistral-7b-instruct-v0.1 model.
	 */
	public function mistral7bInstructV01(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/mistral/mistral-7b-instruct-v0.1', null, null);
	}


	/**
	 * Execute @cf/mistral/mistral-7b-instruct-v0.2-lora model.
	 */
	public function mistral7bInstructV02Lora(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/mistral/mistral-7b-instruct-v0.2-lora', null, null);
	}


	/**
	 * Execute @cf/mistralai/mistral-small-3.1-24b-instruct model.
	 */
	public function mistralSmall3124bInstruct(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/mistralai/mistral-small-3.1-24b-instruct', null, null);
	}


	/**
	 * Execute @cf/moonshotai/kimi-k2.5 model.
	 */
	public function kimiK25(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/moonshotai/kimi-k2.5', null, null);
	}


	/**
	 * Execute @cf/moonshotai/kimi-k2.6 model.
	 */
	public function kimiK26(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/moonshotai/kimi-k2.6', null, null);
	}


	/**
	 * Execute @cf/nvidia/nemotron-3-120b-a12b model.
	 */
	public function nemotron3120bA12b(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/nvidia/nemotron-3-120b-a12b', null, null);
	}


	/**
	 * Execute @cf/openai/gpt-oss-120b model.
	 */
	public function gptOss120b(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/openai/gpt-oss-120b', null, null);
	}


	/**
	 * Execute @cf/openai/gpt-oss-20b model.
	 */
	public function gptOss20b(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/openai/gpt-oss-20b', null, null);
	}


	/**
	 * Execute @cf/openchat/openchat-3.5-0106 model.
	 */
	public function openchat350106(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/openchat/openchat-3.5-0106', null, null);
	}


	/**
	 * Execute @cf/qwen/qwen1.5-0.5b-chat model.
	 */
	public function qwen1505bChat(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/qwen/qwen1.5-0.5b-chat', null, null);
	}


	/**
	 * Execute @cf/qwen/qwen1.5-1.8b-chat model.
	 */
	public function qwen1518bChat(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/qwen/qwen1.5-1.8b-chat', null, null);
	}


	/**
	 * Execute @cf/qwen/qwen1.5-14b-chat-awq model.
	 */
	public function qwen1514bChatAwq(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/qwen/qwen1.5-14b-chat-awq', null, null);
	}


	/**
	 * Execute @cf/qwen/qwen1.5-7b-chat-awq model.
	 */
	public function qwen157bChatAwq(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/qwen/qwen1.5-7b-chat-awq', null, null);
	}


	/**
	 * Execute @cf/qwen/qwen2.5-coder-32b-instruct model.
	 */
	public function qwen25Coder32bInstruct(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/qwen/qwen2.5-coder-32b-instruct', null, null);
	}


	/**
	 * Execute @cf/qwen/qwen3-30b-a3b-fp8 model.
	 */
	public function qwen330bA3bFp8(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/qwen/qwen3-30b-a3b-fp8', null, null);
	}


	/**
	 * Execute @cf/qwen/qwq-32b model.
	 */
	public function qwq32b(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/qwen/qwq-32b', null, null);
	}


	/**
	 * Execute @cf/thebloke/discolm-german-7b-v1-awq model.
	 */
	public function discolmGerman7bV1Awq(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/thebloke/discolm-german-7b-v1-awq', null, null);
	}


	/**
	 * Execute @cf/tiiuae/falcon-7b-instruct model.
	 */
	public function falcon7bInstruct(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/tiiuae/falcon-7b-instruct', null, null);
	}


	/**
	 * Execute @cf/tinyllama/tinyllama-1.1b-chat-v1.0 model.
	 */
	public function tinyllama11bChatV10(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/tinyllama/tinyllama-1.1b-chat-v1.0', null, null);
	}


	/**
	 * Execute @cf/zai-org/glm-4.7-flash model.
	 */
	public function glm47Flash(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@cf/zai-org/glm-4.7-flash', null, null);
	}


	/**
	 * Execute @hf/google/gemma-7b-it model.
	 */
	public function gemma7bIt(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@hf/google/gemma-7b-it', null, null);
	}


	/**
	 * Execute @hf/mistral/mistral-7b-instruct-v0.2 model.
	 */
	public function mistral7bInstructV02(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@hf/mistral/mistral-7b-instruct-v0.2', null, null);
	}


	/**
	 * Execute @hf/nexusflow/starling-lm-7b-beta model.
	 */
	public function starlingLm7bBeta(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@hf/nexusflow/starling-lm-7b-beta', null, null);
	}


	/**
	 * Execute @hf/nousresearch/hermes-2-pro-mistral-7b model.
	 */
	public function hermes2ProMistral7b(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@hf/nousresearch/hermes-2-pro-mistral-7b', null, null);
	}


	/**
	 * Execute @hf/thebloke/deepseek-coder-6.7b-base-awq model.
	 */
	public function deepseekCoder67bBaseAwq(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@hf/thebloke/deepseek-coder-6.7b-base-awq', null, null);
	}


	/**
	 * Execute @hf/thebloke/deepseek-coder-6.7b-instruct-awq model.
	 */
	public function deepseekCoder67bInstructAwq(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@hf/thebloke/deepseek-coder-6.7b-instruct-awq', null, null);
	}


	/**
	 * Execute @hf/thebloke/llama-2-13b-chat-awq model.
	 */
	public function llama213bChatAwq(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@hf/thebloke/llama-2-13b-chat-awq', null, null);
	}


	/**
	 * Execute @hf/thebloke/mistral-7b-instruct-v0.1-awq model.
	 */
	public function mistral7bInstructV01Awq(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@hf/thebloke/mistral-7b-instruct-v0.1-awq', null, null);
	}


	/**
	 * Execute @hf/thebloke/neural-chat-7b-v3-1-awq model.
	 */
	public function neuralChat7bV31Awq(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@hf/thebloke/neural-chat-7b-v3-1-awq', null, null);
	}


	/**
	 * Execute @hf/thebloke/openhermes-2.5-mistral-7b-awq model.
	 */
	public function openhermes25Mistral7bAwq(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@hf/thebloke/openhermes-2.5-mistral-7b-awq', null, null);
	}


	/**
	 * Execute @hf/thebloke/zephyr-7b-beta-awq model.
	 */
	public function zephyr7bBetaAwq(?string $queueRequest = null, ?string $tags = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/@hf/thebloke/zephyr-7b-beta-awq', null, null);
	}
}
