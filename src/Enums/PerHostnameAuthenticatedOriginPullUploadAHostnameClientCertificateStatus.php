<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum PerHostnameAuthenticatedOriginPullUploadAHostnameClientCertificateStatus: string
{
	case Initializing = 'initializing';
	case PendingDeployment = 'pending_deployment';
	case PendingDeletion = 'pending_deletion';
	case Active = 'active';
	case Deleted = 'deleted';
	case DeploymentTimedOut = 'deployment_timed_out';
	case DeletionTimedOut = 'deletion_timed_out';
}
