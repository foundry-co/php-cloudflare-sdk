<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * List Requests
 */
readonly class CloudforceOneRequestListRequest
{
	public function __construct(
		/** Page number of results. */
		public int $page,
		/** Number of results per page. */
		public int $perPage,
		/** Retrieve requests completed after this time. */
		public mixed $completedAfter = null,
		/** Retrieve requests completed before this time. */
		public mixed $completedBefore = null,
		/** Retrieve requests created after this time. */
		public mixed $createdAfter = null,
		/** Retrieve requests created before this time. */
		public mixed $createdBefore = null,
		/** Requested information from request. */
		public ?string $requestType = null,
		/** Field to sort results by. */
		public ?string $sortBy = null,
		/** Sort order (asc or desc). */
		public ?\FoundryCo\Cloudflare\Enums\CloudforceOneRequestListRequestSortOrder $sortOrder = null,
		/** Request Status. */
		public ?\FoundryCo\Cloudflare\Enums\CloudforceOneRequestListRequestStatus $status = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'page' => $this->page,
		    'per_page' => $this->perPage,
		    'completed_after' => $this->completedAfter,
		    'completed_before' => $this->completedBefore,
		    'created_after' => $this->createdAfter,
		    'created_before' => $this->createdBefore,
		    'request_type' => $this->requestType,
		    'sort_by' => $this->sortBy,
		    'sort_order' => $this->sortOrder?->value,
		    'status' => $this->status?->value,
		], fn ($v) => $v !== null);
	}
}
