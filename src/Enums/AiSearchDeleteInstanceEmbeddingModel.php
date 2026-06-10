<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum AiSearchDeleteInstanceEmbeddingModel: string
{
	case CfQwenQwen3Embedding06b = '@cf/qwen/qwen3-embedding-0.6b';
	case CfBaaiBgeM3 = '@cf/baai/bge-m3';
	case CfBaaiBgeLargeEnV15 = '@cf/baai/bge-large-en-v1.5';
	case CfGoogleEmbeddinggemma300m = '@cf/google/embeddinggemma-300m';
	case GoogleAiStudioGeminiEmbedding001 = 'google-ai-studio/gemini-embedding-001';
	case GoogleAiStudioGeminiEmbedding2Preview = 'google-ai-studio/gemini-embedding-2-preview';
	case OpenaiTextEmbedding3Small = 'openai/text-embedding-3-small';
	case OpenaiTextEmbedding3Large = 'openai/text-embedding-3-large';
}
