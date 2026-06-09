<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum R2SuperSlurperLogsLogType: string
{
	case MigrationStart = 'migrationStart';
	case MigrationComplete = 'migrationComplete';
	case MigrationAbort = 'migrationAbort';
	case MigrationError = 'migrationError';
	case MigrationPause = 'migrationPause';
	case MigrationResume = 'migrationResume';
	case MigrationErrorFailedContinuation = 'migrationErrorFailedContinuation';
	case ImportErrorRetryExhaustion = 'importErrorRetryExhaustion';
	case ImportSkippedStorageClass = 'importSkippedStorageClass';
	case ImportSkippedOversized = 'importSkippedOversized';
	case ImportSkippedEmptyObject = 'importSkippedEmptyObject';
	case ImportSkippedUnsupportedContentType = 'importSkippedUnsupportedContentType';
	case ImportSkippedExcludedContentType = 'importSkippedExcludedContentType';
	case ImportSkippedInvalidMedia = 'importSkippedInvalidMedia';
	case ImportSkippedRequiresRetrieval = 'importSkippedRequiresRetrieval';
}
