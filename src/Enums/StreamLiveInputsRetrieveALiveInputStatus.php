<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum StreamLiveInputsRetrieveALiveInputStatus: string
{
	case Connected = 'connected';
	case Reconnected = 'reconnected';
	case Reconnecting = 'reconnecting';
	case ClientDisconnect = 'client_disconnect';
	case TtlExceeded = 'ttl_exceeded';
	case FailedToConnect = 'failed_to_connect';
	case FailedToReconnect = 'failed_to_reconnect';
	case NewConfigurationAccepted = 'new_configuration_accepted';
}
