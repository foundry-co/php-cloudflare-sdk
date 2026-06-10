<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Updates an event
 */
readonly class PatchEventUpdateRequest
{
	public function __construct(
		/** Dataset ID containing the event to update. */
		public string $datasetId,
		public ?string $attacker = null,
		public ?string $attackerCountry = null,
		public ?string $category = null,
		public ?\DateTimeImmutable $createdAt = null,
		public ?\DateTimeImmutable $date = null,
		public ?string $event = null,
		public ?string $indicator = null,
		public ?string $indicatorType = null,
		public ?string $insight = null,
		public ?\FoundryCo\Cloudflare\Responses\PatchEventUpdateRequestRaw $raw = null,
		public ?string $targetCountry = null,
		public ?string $targetIndustry = null,
		public ?string $tlp = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'datasetId' => $this->datasetId,
		    'attacker' => $this->attacker,
		    'attackerCountry' => $this->attackerCountry,
		    'category' => $this->category,
		    'createdAt' => $this->createdAt?->format(\DateTimeImmutable::ATOM),
		    'date' => $this->date?->format(\DateTimeImmutable::ATOM),
		    'event' => $this->event,
		    'indicator' => $this->indicator,
		    'indicatorType' => $this->indicatorType,
		    'insight' => $this->insight,
		    'raw' => $this->raw?->toArray(),
		    'targetCountry' => $this->targetCountry,
		    'targetIndustry' => $this->targetIndustry,
		    'tlp' => $this->tlp,
		], fn ($v) => $v !== null);
	}
}
