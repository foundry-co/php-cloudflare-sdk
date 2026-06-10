<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new Evaluation
 */
readonly class AigConfigCreateEvaluationsRequest
{
	public function __construct(
		public array $datasetIds,
		public array $evaluationTypeIds,
		public string $name,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'dataset_ids' => $this->datasetIds,
		    'evaluation_type_ids' => $this->evaluationTypeIds,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
