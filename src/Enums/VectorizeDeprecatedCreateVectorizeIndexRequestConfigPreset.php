<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum VectorizeDeprecatedCreateVectorizeIndexRequestConfigPreset: string
{
	case CfBaaiBgeSmallEnV15 = '@cf/baai/bge-small-en-v1.5';
	case CfBaaiBgeBaseEnV15 = '@cf/baai/bge-base-en-v1.5';
	case CfBaaiBgeLargeEnV15 = '@cf/baai/bge-large-en-v1.5';
	case OpenaiTextEmbeddingAda002 = 'openai/text-embedding-ada-002';
	case CohereEmbedMultilingualV20 = 'cohere/embed-multilingual-v2.0';
}
