<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum CustomHostnameForAZoneSslStatus: string
{
	case Initializing = 'initializing';
	case PendingValidation = 'pending_validation';
	case Deleted = 'deleted';
	case PendingIssuance = 'pending_issuance';
	case PendingDeployment = 'pending_deployment';
	case PendingDeletion = 'pending_deletion';
	case PendingExpiration = 'pending_expiration';
	case Expired = 'expired';
	case Active = 'active';
	case InitializingTimedOut = 'initializing_timed_out';
	case ValidationTimedOut = 'validation_timed_out';
	case IssuanceTimedOut = 'issuance_timed_out';
	case DeploymentTimedOut = 'deployment_timed_out';
	case DeletionTimedOut = 'deletion_timed_out';
	case PendingCleanup = 'pending_cleanup';
	case StagingDeployment = 'staging_deployment';
	case StagingActive = 'staging_active';
	case Deactivating = 'deactivating';
	case Inactive = 'inactive';
	case BackupIssued = 'backup_issued';
	case HoldingDeployment = 'holding_deployment';
}
