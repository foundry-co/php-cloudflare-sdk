<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum IndicatorTagSearchItemField: string
{
	case Value = 'value';
	case CategoryId = 'categoryId';
	case ActorCategory = 'actorCategory';
	case AliasGroupNames = 'aliasGroupNames';
	case AttributionConfidence = 'attributionConfidence';
	case AttributionOrganization = 'attributionOrganization';
	case Motive = 'motive';
	case OpsecLevel = 'opsecLevel';
	case OriginCountryISO = 'originCountryISO';
	case SophisticationLevel = 'sophisticationLevel';
	case Priority = 'priority';
	case AnalyticPriority = 'analyticPriority';
}
