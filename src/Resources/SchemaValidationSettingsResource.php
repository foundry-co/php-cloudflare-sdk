<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SchemaValidationSettingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get global schema validation settings
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/schema_validation/settings', \FoundryCo\Cloudflare\Responses\SchemaValidationGetSettings::class, []);
	}


	/**
	 * Update global schema validation settings
	 */
	public function update(\FoundryCo\Cloudflare\Requests\SchemaValidationUpdateSettingsRequest $request): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/schema_validation/settings', \FoundryCo\Cloudflare\Responses\SchemaValidationUpdateSettings::class, $request);
	}


	/**
	 * Edit global schema validation settings
	 */
	public function settings(\FoundryCo\Cloudflare\Requests\SchemaValidationEditSettingsRequest $request): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/schema_validation/settings', \FoundryCo\Cloudflare\Responses\SchemaValidationEditSettings::class, $request);
	}


	/**
	 * List per-operation schema validation settings
	 */
	public function operations(?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/schema_validation/settings/operations', \FoundryCo\Cloudflare\Responses\SchemaValidationListPerOperationSettings::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Bulk edit per-operation schema validation settings
	 */
	public function schemaValidationBulkEditPerOperationSettings(): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/schema_validation/settings/operations', null, null);
	}


	/**
	 * Get per-operation schema validation setting
	 */
	public function get(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/schema_validation/settings/operations/' . $operationId, \FoundryCo\Cloudflare\Responses\SchemaValidationGetPerOperationSetting::class, []);
	}


	/**
	 * Update per-operation schema validation setting
	 */
	public function schemaValidationUpdatePerOperationSetting(
		\FoundryCo\Cloudflare\Requests\SchemaValidationUpdatePerOperationSettingRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/schema_validation/settings/operations/' . $operationId, \FoundryCo\Cloudflare\Responses\SchemaValidationUpdatePerOperationSetting::class, $request);
	}


	/**
	 * Delete per-operation schema validation setting
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/schema_validation/settings/operations/' . $operationId);
	}
}
