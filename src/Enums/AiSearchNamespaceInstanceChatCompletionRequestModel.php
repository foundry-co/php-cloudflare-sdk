<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum AiSearchNamespaceInstanceChatCompletionRequestModel: string
{
	case CfMetaLlama3370bInstructFp8Fast = '@cf/meta/llama-3.3-70b-instruct-fp8-fast';
	case CfZaiOrgGlm47Flash = '@cf/zai-org/glm-4.7-flash';
	case CfMetaLlama318bInstructFast = '@cf/meta/llama-3.1-8b-instruct-fast';
	case CfMetaLlama318bInstructFp8 = '@cf/meta/llama-3.1-8b-instruct-fp8';
	case CfMetaLlama4Scout17b16eInstruct = '@cf/meta/llama-4-scout-17b-16e-instruct';
	case CfQwenQwen330bA3bFp8 = '@cf/qwen/qwen3-30b-a3b-fp8';
	case CfDeepseekAiDeepseekR1DistillQwen32b = '@cf/deepseek-ai/deepseek-r1-distill-qwen-32b';
	case CfMoonshotaiKimiK2Instruct = '@cf/moonshotai/kimi-k2-instruct';
	case CfGoogleGemma312bIt = '@cf/google/gemma-3-12b-it';
	case CfGoogleGemma426bA4bIt = '@cf/google/gemma-4-26b-a4b-it';
	case CfMoonshotaiKimiK25 = '@cf/moonshotai/kimi-k2.5';
	case AnthropicClaude37Sonnet = 'anthropic/claude-3-7-sonnet';
	case AnthropicClaudeSonnet4 = 'anthropic/claude-sonnet-4';
	case AnthropicClaudeOpus4 = 'anthropic/claude-opus-4';
	case AnthropicClaude35Haiku = 'anthropic/claude-3-5-haiku';
	case CerebrasQwen3235bA22bInstruct = 'cerebras/qwen-3-235b-a22b-instruct';
	case CerebrasQwen3235bA22bThinking = 'cerebras/qwen-3-235b-a22b-thinking';
	case CerebrasLlama3370b = 'cerebras/llama-3.3-70b';
	case CerebrasLlama4Maverick17b128eInstruct = 'cerebras/llama-4-maverick-17b-128e-instruct';
	case CerebrasLlama4Scout17b16eInstruct = 'cerebras/llama-4-scout-17b-16e-instruct';
	case CerebrasGptOss120b = 'cerebras/gpt-oss-120b';
	case GoogleAiStudioGemini25Flash = 'google-ai-studio/gemini-2.5-flash';
	case GoogleAiStudioGemini25Pro = 'google-ai-studio/gemini-2.5-pro';
	case GrokGrok4 = 'grok/grok-4';
	case GroqLlama3370bVersatile = 'groq/llama-3.3-70b-versatile';
	case GroqLlama318bInstant = 'groq/llama-3.1-8b-instant';
	case OpenaiGpt5 = 'openai/gpt-5';
	case OpenaiGpt5Mini = 'openai/gpt-5-mini';
	case OpenaiGpt5Nano = 'openai/gpt-5-nano';
}
