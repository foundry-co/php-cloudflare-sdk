<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Creates a new event
 */
readonly class PostEventCreateRequest
{
	public function __construct(
		public string $category,
		public \DateTimeImmutable $date,
		public string $event,
		public \FoundryCo\Cloudflare\Responses\PostEventCreateRequestRaw $raw,
		public string $tlp,
		public ?float $accountId = null,
		public ?string $attacker = null,
		public ?string $attackerCountry = null,
		public ?string $datasetId = null,
		public ?string $indicator = null,
		public ?string $indicatorType = null,
		/** Array of indicators for this event. Supports multiple indicators per event for complex scenarios. */
		public ?array $indicators = null,
		public ?string $insight = null,
		public ?array $tags = null,
		public ?string $targetCountry = null,
		public ?string $targetIndustry = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'category' => $this->category,
		    'date' => $this->date->format(\DateTimeImmutable::ATOM),
		    'event' => $this->event,
		    'raw' => $this->raw->toArray(),
		    'tlp' => $this->tlp,
		    'accountId' => $this->accountId,
		    'attacker' => $this->attacker,
		    'attackerCountry' => $this->attackerCountry,
		    'datasetId' => $this->datasetId,
		    'indicator' => $this->indicator,
		    'indicatorType' => $this->indicatorType,
		    'indicators' => $this->indicators,
		    'insight' => $this->insight,
		    'tags' => $this->tags,
		    'targetCountry' => $this->targetCountry,
		    'targetIndustry' => $this->targetIndustry,
		], fn ($v) => $v !== null);
	}
}
