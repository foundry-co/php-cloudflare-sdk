<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum NotificationWebhooksGetAWebhookType: string
{
	case Datadog = 'datadog';
	case Discord = 'discord';
	case Feishu = 'feishu';
	case Gchat = 'gchat';
	case Generic = 'generic';
	case Opsgenie = 'opsgenie';
	case Slack = 'slack';
	case Splunk = 'splunk';
}
