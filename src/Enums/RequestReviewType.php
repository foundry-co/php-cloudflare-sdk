<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RequestReviewType: string
{
	case AccountSuspend = 'account_suspend';
	case CopyrightInterstitial = 'copyright_interstitial';
	case GeoBlock = 'geo_block';
	case LegalBlock = 'legal_block';
	case MalwareInterstitial = 'malware_interstitial';
	case MisleadingInterstitial = 'misleading_interstitial';
	case NetworkBlock = 'network_block';
	case PhishingInterstitial = 'phishing_interstitial';
	case PlayfairiteEnforce = 'playfairite_enforce';
	case R2TakedownAccount = 'r2_takedown_account';
	case R2TakedownBucket = 'r2_takedown_bucket';
	case R2TakedownObject = 'r2_takedown_object';
	case RateLimitCache = 'rate_limit_cache';
	case RedirectVideoStream = 'redirect_video_stream';
	case RegistrarFreeze = 'registrar_freeze';
	case RegistrarParking = 'registrar_parking';
	case StreamBlockAccount = 'stream_block_account';
	case UserSuspend = 'user_suspend';
	case WorkersTakedownByZoneId = 'workers_takedown_by_zone_id';
}
