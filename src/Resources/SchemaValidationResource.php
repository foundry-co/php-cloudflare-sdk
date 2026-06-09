<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SchemaValidationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List all uploaded schemas
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?bool $omitSource = null,
		?bool $validationEnabled = null,
	): \FoundryCo\Cloudflare\Responses\SchemaValidationPaginated
	{
		return $this->client->get('/zones/' . $this->zoneId . '/schema_validation/schemas', \FoundryCo\Cloudflare\Responses\SchemaValidationPaginated::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'omitSource' => $omitSource ?? null, 'validationEnabled' => $validationEnabled ?? null]);
	}


	/**
	 * Upload a schema
	 */
	public function create(\FoundryCo\Cloudflare\Requests\SchemaValidationCreateSchemaRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/schema_validation/schemas', null, $request);
	}


	/**
	 * List hosts covered by uploaded schemas
	 */
	public function hosts(?int $page = null, ?int $perPage = null): \FoundryCo\Cloudflare\Responses\SchemaValidationHosts
	{
		return $this->client->get('/zones/' . $this->zoneId . '/schema_validation/schemas/hosts', \FoundryCo\Cloudflare\Responses\SchemaValidationHosts::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Get details of a schema
	 */
	public function get(?bool $omitSource = null): \FoundryCo\Cloudflare\Responses\SchemaValidationSchema
	{
		return $this->client->get('/zones/' . $this->zoneId . '/schema_validation/schemas/' . $schemaId, \FoundryCo\Cloudflare\Responses\SchemaValidationSchema::class, ['omitSource' => $omitSource ?? null]);
	}


	/**
	 * Edit details of a schema to enable validation
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\SchemaValidationEditSchemaRequest $request,
	): \FoundryCo\Cloudflare\Responses\SchemaValidationSchema
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/schema_validation/schemas/' . $schemaId, \FoundryCo\Cloudflare\Responses\SchemaValidationSchema::class, $request);
	}


	/**
	 * Delete a schema
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/schema_validation/schemas/' . $schemaId);
	}


	/**
	 * Retrieve all operations from the schema.
	 */
	public function operations(
		?array $feature = null,
		?array $host = null,
		?array $method = null,
		?string $endpoint = null,
		?int $page = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\SchemaValidationOperationStatus $operationStatus = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/schema_validation/schemas/' . $schemaId . '/operations', null, ['feature' => $feature ?? null, 'host' => $host ?? null, 'method' => $method ?? null, 'endpoint' => $endpoint ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'operationStatus' => $operationStatus ?? null]);
	}
}
