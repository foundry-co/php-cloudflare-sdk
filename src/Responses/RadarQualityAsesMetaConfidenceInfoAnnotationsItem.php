<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Annotation associated with the result (e.g. outage or other type of event).
 */
readonly class RadarQualityAsesMetaConfidenceInfoAnnotationsItem
{
	public function __construct(
		/** Data source for annotations. */
		public \FoundryCo\Cloudflare\Enums\RadarQualityAsesMetaConfidenceInfoAnnotationsItemDataSource $dataSource,
		public string $description,
		public \DateTimeImmutable $endDate,
		/** Event type for annotations. */
		public \FoundryCo\Cloudflare\Enums\RadarQualityAsesMetaConfidenceInfoAnnotationsItemEventType $eventType,
		/** Whether event is a single point in time or a time range. */
		public bool $isInstantaneous,
		public string $linkedUrl,
		public \DateTimeImmutable $startDate,
	) {
	}
}
