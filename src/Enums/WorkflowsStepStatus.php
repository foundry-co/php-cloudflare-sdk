<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum WorkflowsStepStatus: string
{
	case Queued = 'queued';
	case Running = 'running';
	case Paused = 'paused';
	case Errored = 'errored';
	case Terminated = 'terminated';
	case Complete = 'complete';
	case WaitingForPause = 'waitingForPause';
	case Waiting = 'waiting';
	case RollingBack = 'rollingBack';
}
