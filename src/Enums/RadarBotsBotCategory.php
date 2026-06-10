<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarBotsBotCategory: string
{
	case SEARCHENGINECRAWLER = 'SEARCH_ENGINE_CRAWLER';
	case SEARCHENGINEOPTIMIZATION = 'SEARCH_ENGINE_OPTIMIZATION';
	case MONITORINGANDANALYTICS = 'MONITORING_AND_ANALYTICS';
	case ADVERTISINGANDMARKETING = 'ADVERTISING_AND_MARKETING';
	case SOCIALMEDIAMARKETING = 'SOCIAL_MEDIA_MARKETING';
	case PAGEPREVIEW = 'PAGE_PREVIEW';
	case ACADEMICRESEARCH = 'ACADEMIC_RESEARCH';
	case SECURITY = 'SECURITY';
	case ACCESSIBILITY = 'ACCESSIBILITY';
	case WEBHOOKS = 'WEBHOOKS';
	case FEEDFETCHER = 'FEED_FETCHER';
	case AICRAWLER = 'AI_CRAWLER';
	case AGGREGATOR = 'AGGREGATOR';
	case AIASSISTANT = 'AI_ASSISTANT';
	case AISEARCH = 'AI_SEARCH';
	case ARCHIVER = 'ARCHIVER';
}
