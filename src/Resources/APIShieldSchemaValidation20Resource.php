<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class APIShieldSchemaValidation20Resource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Update multiple operation-level schema validation settings
	 */
	public function update(): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/api_gateway/operations/schema_validation', null, null);
	}


	/**
	 * Retrieve operation-level schema validation settings
	 */
	public function get(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/operations/' . $operationId . '/schema_validation', null, []);
	}


	/**
	 * Update operation-level schema validation settings
	 */
	public function schemaValidation(
		\FoundryCo\Cloudflare\Requests\ApiShieldSchemaValidationUpdateOperationLevelSettingsRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/api_gateway/operations/' . $operationId . '/schema_validation', null, $request);
	}


	/**
	 * Retrieve zone level schema validation settings
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/settings/schema_validation', null, []);
	}


	/**
	 * Update zone level schema validation settings
	 */
	public function apiShieldSchemaValidationUpdateZoneLevelSettings(
		\FoundryCo\Cloudflare\Requests\ApiShieldSchemaValidationUpdateZoneLevelSettingsRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/api_gateway/settings/schema_validation', null, $request);
	}


	/**
	 * Update zone level schema validation settings
	 */
	public function apiShieldSchemaValidationPatchZoneLevelSettings(
		\FoundryCo\Cloudflare\Requests\ApiShieldSchemaValidationPatchZoneLevelSettingsRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/api_gateway/settings/schema_validation', null, $request);
	}


	/**
	 * Retrieve information about all schemas on a zone
	 */
	public function userSchemas(
		?int $page = null,
		?int $perPage = null,
		?bool $omitSource = null,
		?bool $validationEnabled = null,
	): \FoundryCo\Cloudflare\Responses\APIShieldSchemaValidation20Schemas
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/user_schemas', \FoundryCo\Cloudflare\Responses\APIShieldSchemaValidation20Schemas::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'omitSource' => $omitSource ?? null, 'validationEnabled' => $validationEnabled ?? null]);
	}


	/**
	 * Upload a schema to a zone
	 */
	public function create(): \FoundryCo\Cloudflare\Responses\APIShieldSchemaValidation20Schema
	{
		return $this->client->post('/zones/' . $this->zoneId . '/api_gateway/user_schemas', \FoundryCo\Cloudflare\Responses\APIShieldSchemaValidation20Schema::class, null);
	}


	/**
	 * Retrieve schema hosts in a zone
	 */
	public function hosts(): \FoundryCo\Cloudflare\Responses\APIShieldSchemaValidation20Hosts
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/user_schemas/hosts', \FoundryCo\Cloudflare\Responses\APIShieldSchemaValidation20Hosts::class, []);
	}


	/**
	 * Retrieve information about a specific schema on a zone
	 */
	public function apiShieldSchemaValidationRetrieveInformationAboutSpecificSchema(
		?bool $omitSource = null,
	): \FoundryCo\Cloudflare\Responses\APIShieldSchemaValidation20Schema
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/user_schemas/' . $schemaId, \FoundryCo\Cloudflare\Responses\APIShieldSchemaValidation20Schema::class, ['omitSource' => $omitSource ?? null]);
	}


	/**
	 * Enable validation for a schema
	 */
	public function apiShieldSchemaValidationEnableValidationForASchema(
		\FoundryCo\Cloudflare\Requests\ApiShieldSchemaValidationEnableValidationForASchemaRequest $request,
	): \FoundryCo\Cloudflare\Responses\APIShieldSchemaValidation20Schema
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/api_gateway/user_schemas/' . $schemaId, \FoundryCo\Cloudflare\Responses\APIShieldSchemaValidation20Schema::class, $request);
	}


	/**
	 * Delete a schema
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/api_gateway/user_schemas/' . $schemaId);
	}


	/**
	 * Retrieve all operations from a schema.
	 */
	public function operations(
		?array $feature = null,
		?array $host = null,
		?array $method = null,
		?string $endpoint = null,
		?int $page = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\APIShieldSchemaValidation20OperationStatus $operationStatus = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/user_schemas/' . $schemaId . '/operations', null, ['feature' => $feature ?? null, 'host' => $host ?? null, 'method' => $method ?? null, 'endpoint' => $endpoint ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'operationStatus' => $operationStatus ?? null]);
	}
}
