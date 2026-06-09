<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TsengAbuseComplaintProcessorOtherGetAbuseReport
{
	public function __construct(
		/** Creation date of report. Time in RFC 3339 format (https://www.rfc-editor.org/rfc/rfc3339.html) */
		public string $cdate,
		/** Domain that relates to the report. */
		public string $domain,
		/** Public facing ID of abuse report, aka abuse_rand. */
		public string $id,
		/** A summary of the mitigations related to this report. */
		public TsengAbuseComplaintProcessorOtherGetAbuseReportMitigationSummary $mitigationSummary,
		/** An enum value that represents the status of an abuse record */
		public \FoundryCo\Cloudflare\Enums\TsengAbuseComplaintProcessorOtherGetAbuseReportStatus $status,
		/** The abuse report type */
		public \FoundryCo\Cloudflare\Enums\TsengAbuseComplaintProcessorOtherGetAbuseReportType $type,
		/** Justification for the report. */
		public ?string $justification = null,
		/** Original work / Targeted brand in the alleged abuse. */
		public ?string $originalWork = null,
		/** Information about the submitter of the report. */
		public ?TsengAbuseComplaintProcessorOtherGetAbuseReportSubmitter $submitter = null,
		public ?array $urls = null,
	) {
	}
}
