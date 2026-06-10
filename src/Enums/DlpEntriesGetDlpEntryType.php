<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum DlpEntriesGetDlpEntryType: string
{
	case Custom = 'custom';
	case CustomPromptTopic = 'custom_prompt_topic';
	case Predefined = 'predefined';
	case Integration = 'integration';
	case ExactData = 'exact_data';
	case DocumentFingerprint = 'document_fingerprint';
	case WordList = 'word_list';
}
