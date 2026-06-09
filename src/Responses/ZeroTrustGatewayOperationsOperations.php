<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustGatewayOperationsOperations
{
	public function __construct(
		public ?\DateTimeImmutable $createdAt = null,
		/** Provide metadata describing the resource the operation acts on. The fields present depend on the `operation_type`. */
		public ?array $data = null,
		/** Identify the API resource with a UUID. */
		public ?string $id = null,
		/** The type of operation. */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustGatewayOperationsOperationsOperationType $operationType = null,
		/** A human-readable error message if the operation failed. Only present when the operation status is `failed`. */
		public ?string $processingError = null,
		/** The result of the operation. Only present when the operation has completed successfully. */
		public ?string $result = null,
		/** The status of the operation. */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustGatewayOperationsOperationsStatus $status = null,
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
