<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class APIShieldLabelsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Retrieve all labels
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\APIShieldLabelsOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\APIShieldLabelsDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\APIShieldLabelsSource $source = null,
		?string $filter = null,
		?bool $withMappedResourceCounts = null,
	): \FoundryCo\Cloudflare\Responses\APIShieldLabelsLabels
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/labels', \FoundryCo\Cloudflare\Responses\APIShieldLabelsLabels::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null, 'source' => $source ?? null, 'filter' => $filter ?? null, 'withMappedResourceCounts' => $withMappedResourceCounts ?? null]);
	}


	/**
	 * Retrieve managed label
	 */
	public function get(?bool $withMappedResourceCounts = null): \FoundryCo\Cloudflare\Responses\APIShieldLabelsLabel
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/labels/managed/' . $name, \FoundryCo\Cloudflare\Responses\APIShieldLabelsLabel::class, ['withMappedResourceCounts' => $withMappedResourceCounts ?? null]);
	}


	/**
	 * Replace operation(s) attached to a managed label
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ApiShieldLabelsReplaceOperationsAttachedToManagedLabelRequest $request,
	): \FoundryCo\Cloudflare\Responses\APIShieldLabelsLabel
	{
		return $this->client->put('/zones/' . $this->zoneId . '/api_gateway/labels/managed/' . $name . '/resources/operation', \FoundryCo\Cloudflare\Responses\APIShieldLabelsLabel::class, $request);
	}


	/**
	 * Create user labels
	 */
	public function create(): \FoundryCo\Cloudflare\Responses\APIShieldLabelsLabels
	{
		return $this->client->post('/zones/' . $this->zoneId . '/api_gateway/labels/user', \FoundryCo\Cloudflare\Responses\APIShieldLabelsLabels::class, null);
	}


	/**
	 * Delete user labels
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/api_gateway/labels/user');
	}


	/**
	 * Retrieve user label
	 */
	public function user(?bool $withMappedResourceCounts = null): \FoundryCo\Cloudflare\Responses\APIShieldLabelsLabel
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/labels/user/' . $name, \FoundryCo\Cloudflare\Responses\APIShieldLabelsLabel::class, ['withMappedResourceCounts' => $withMappedResourceCounts ?? null]);
	}


	/**
	 * Update user label
	 */
	public function apiShieldPutUserLabel(
		\FoundryCo\Cloudflare\Requests\ApiShieldPutUserLabelRequest $request,
	): \FoundryCo\Cloudflare\Responses\APIShieldLabelsLabel
	{
		return $this->client->put('/zones/' . $this->zoneId . '/api_gateway/labels/user/' . $name, \FoundryCo\Cloudflare\Responses\APIShieldLabelsLabel::class, $request);
	}


	/**
	 * Patch user label
	 */
	public function apiShieldPatchUserLabel(
		\FoundryCo\Cloudflare\Requests\ApiShieldPatchUserLabelRequest $request,
	): \FoundryCo\Cloudflare\Responses\APIShieldLabelsLabel
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/api_gateway/labels/user/' . $name, \FoundryCo\Cloudflare\Responses\APIShieldLabelsLabel::class, $request);
	}


	/**
	 * Delete user label
	 */
	public function apiShieldDeleteUserLabel(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/api_gateway/labels/user/' . $name);
	}


	/**
	 * Replace operation(s) attached to a user label
	 */
	public function operation(
		\FoundryCo\Cloudflare\Requests\ApiShieldLabelsReplaceOperationsAttachedToUserLabelRequest $request,
	): \FoundryCo\Cloudflare\Responses\APIShieldLabelsLabel
	{
		return $this->client->put('/zones/' . $this->zoneId . '/api_gateway/labels/user/' . $name . '/resources/operation', \FoundryCo\Cloudflare\Responses\APIShieldLabelsLabel::class, $request);
	}


	/**
	 * Bulk attach label(s) on operation(s) in endpoint management
	 */
	public function labels(
		\FoundryCo\Cloudflare\Requests\ApiShieldOperationsBulkPostLabelsToOperationsRequest $request,
	): \FoundryCo\Cloudflare\Responses\APIShieldLabelsOperations
	{
		return $this->client->post('/zones/' . $this->zoneId . '/api_gateway/operations/labels', \FoundryCo\Cloudflare\Responses\APIShieldLabelsOperations::class, $request);
	}


	/**
	 * Bulk replace label(s) on operation(s) in endpoint management
	 */
	public function apiShieldOperationsBulkPutLabelsToOperations(
		\FoundryCo\Cloudflare\Requests\ApiShieldOperationsBulkPutLabelsToOperationsRequest $request,
	): \FoundryCo\Cloudflare\Responses\APIShieldLabelsOperations
	{
		return $this->client->put('/zones/' . $this->zoneId . '/api_gateway/operations/labels', \FoundryCo\Cloudflare\Responses\APIShieldLabelsOperations::class, $request);
	}


	/**
	 * Bulk remove label(s) on operation(s) in endpoint management
	 */
	public function apiShieldOperationsBulkDeleteLabelsToOperations(
		\FoundryCo\Cloudflare\Requests\ApiShieldOperationsBulkDeleteLabelsToOperationsRequest $request,
	): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/api_gateway/operations/labels');
	}


	/**
	 * Attach label(s) on an operation in endpoint management
	 */
	public function apiShieldOperationsPostLabelsToOperation(
		\FoundryCo\Cloudflare\Requests\ApiShieldOperationsPostLabelsToOperationRequest $request,
	): \FoundryCo\Cloudflare\Responses\APIShieldLabelsOperation
	{
		return $this->client->post('/zones/' . $this->zoneId . '/api_gateway/operations/' . $operationId . '/labels', \FoundryCo\Cloudflare\Responses\APIShieldLabelsOperation::class, $request);
	}


	/**
	 * Replace label(s) on an operation in endpoint management
	 */
	public function apiShieldOperationsPutLabelsToOperation(
		\FoundryCo\Cloudflare\Requests\ApiShieldOperationsPutLabelsToOperationRequest $request,
	): \FoundryCo\Cloudflare\Responses\APIShieldLabelsOperation
	{
		return $this->client->put('/zones/' . $this->zoneId . '/api_gateway/operations/' . $operationId . '/labels', \FoundryCo\Cloudflare\Responses\APIShieldLabelsOperation::class, $request);
	}


	/**
	 * Remove label(s) on an operation in endpoint management
	 */
	public function apiShieldOperationsDeleteLabelsFromOperation(
		\FoundryCo\Cloudflare\Requests\ApiShieldOperationsDeleteLabelsFromOperationRequest $request,
	): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/api_gateway/operations/' . $operationId . '/labels');
	}
}
