<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a relationship between two events
 */
readonly class PostCreateEventRelationshipRequest
{
	public function __construct(
		/** Array of UUIDs for child events. Single child = 1:1 relationship, multiple = 1:many relationships */
		public array $childIds,
		/** Dataset identifier where the events are stored */
		public string $datasetId,
		/** UUID of the parent event that will be the source of the relationship */
		public string $parentId,
		/** Type of relationship to create between parent and child events */
		public \FoundryCo\Cloudflare\Enums\PostCreateEventRelationshipRequestRelationshipType $relationshipType,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'childIds' => $this->childIds,
		    'datasetId' => $this->datasetId,
		    'parentId' => $this->parentId,
		    'relationshipType' => $this->relationshipType->value,
		], fn ($v) => $v !== null);
	}
}
