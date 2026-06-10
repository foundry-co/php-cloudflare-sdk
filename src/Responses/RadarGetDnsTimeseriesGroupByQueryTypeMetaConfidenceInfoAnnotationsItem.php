<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Annotation associated with the result (e.g. outage or other type of event).
 */
readonly class RadarGetDnsTimeseriesGroupByQueryTypeMetaConfidenceInfoAnnotationsItem
{
	public function __construct(
		/** Data source for annotations. */
		public ?\FoundryCo\Cloudflare\Enums\RadarGetDnsTimeseriesGroupByQueryTypeMetaConfidenceInfoAnnotationsItemDataSource $dataSource = null,
		public ?string $description = null,
		public ?\DateTimeImmutable $endDate = null,
		/** Event type for annotations. */
		public ?\FoundryCo\Cloudflare\Enums\RadarGetDnsTimeseriesGroupByQueryTypeMetaConfidenceInfoAnnotationsItemEventType $eventType = null,
		/** Whether event is a single point in time or a time range. */
		public ?bool $isInstantaneous = null,
		public ?string $linkedUrl = null,
		public ?\DateTimeImmutable $startDate = null,
	) {
	}
}
