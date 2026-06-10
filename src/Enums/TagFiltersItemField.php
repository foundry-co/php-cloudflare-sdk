<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum TagFiltersItemField: string
{
	case Uuid = 'uuid';
	case Value = 'value';
	case ActorCategory = 'actorCategory';
	case AliasGroupNames = 'aliasGroupNames';
	case AttributionConfidence = 'attributionConfidence';
	case AttributionOrganization = 'attributionOrganization';
	case CategoryName = 'categoryName';
	case Motive = 'motive';
	case OpsecLevel = 'opsecLevel';
	case OriginCountryISO = 'originCountryISO';
	case SophisticationLevel = 'sophisticationLevel';
	case Priority = 'priority';
	case AnalyticPriority = 'analyticPriority';
}
