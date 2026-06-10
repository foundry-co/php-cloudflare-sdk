<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum UpdateMeetingRequestAiConfigSummarizationSummaryType: string
{
	case General = 'general';
	case TeamMeeting = 'team_meeting';
	case SalesCall = 'sales_call';
	case ClientCheckIn = 'client_check_in';
	case Interview = 'interview';
	case DailyStandup = 'daily_standup';
	case OneOnOneMeeting = 'one_on_one_meeting';
	case Lecture = 'lecture';
	case CodeReview = 'code_review';
}
