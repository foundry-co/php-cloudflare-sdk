<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum WorkersAiPostRunCfDeepgramNova3RequestEncoding: string
{
	case Linear16 = 'linear16';
	case Flac = 'flac';
	case Mulaw = 'mulaw';
	case AmrNb = 'amr-nb';
	case AmrWb = 'amr-wb';
	case Opus = 'opus';
	case Speex = 'speex';
	case G729 = 'g729';
}
