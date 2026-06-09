<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class EventResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Filter and list events
	 */
	public function list(
		?string $cursor = null,
		?array $search = null,
		?float $page = null,
		?float $pageSize = null,
		?string $orderBy = null,
		?\FoundryCo\Cloudflare\Enums\EventOrder $order = null,
		?array $datasetId = null,
		?bool $forceRefresh = null,
		?\FoundryCo\Cloudflare\Enums\EventFormat $format = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events', null, ['cursor' => $cursor ?? null, 'search' => $search ?? null, 'page' => $page ?? null, 'pageSize' => $pageSize ?? null, 'orderBy' => $orderBy ?? null, 'order' => $order ?? null, 'datasetId' => $datasetId ?? null, 'forceRefresh' => $forceRefresh ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Aggregate events by single or multiple columns with optional date filtering
	 */
	public function aggregate(
		?string $aggregateBy = null,
		?array $datasetId = null,
		?string $startDate = null,
		?string $endDate = null,
		?bool $groupByDate = null,
		?float $limit = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/aggregate', null, ['aggregateBy' => $aggregateBy ?? null, 'datasetId' => $datasetId ?? null, 'startDate' => $startDate ?? null, 'endDate' => $endDate ?? null, 'groupByDate' => $groupByDate ?? null, 'limit' => $limit ?? null]);
	}


	/**
	 * Creates a new event
	 */
	public function create(\FoundryCo\Cloudflare\Requests\PostEventCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/create', null, $request);
	}


	/**
	 * Creates bulk events
	 */
	public function bulk(\FoundryCo\Cloudflare\Requests\PostEventCreateBulkRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/create/bulk', null, $request);
	}


	/**
	 * Creates bulk DOS event with relationships and indicators
	 */
	public function relationships(
		\FoundryCo\Cloudflare\Requests\PostDOSEventCreateBulkWithRelationshipsRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/create/bulk/relationships', null, $request);
	}


	/**
	 * Copies specified events from one dataset to another dataset
	 */
	public function copy(
		string $datasetId,
		\FoundryCo\Cloudflare\Requests\PostEventCopyToNewDSRequest $request,
		?bool $keepRawData = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId . '/copy', null, $request);
	}


	/**
	 * Reads an event
	 */
	public function get(string $datasetId, string $eventId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId . '/events/' . $eventId, null, []);
	}


	/**
	 * Moves specified events from one dataset to another dataset
	 */
	public function move(
		string $datasetId,
		\FoundryCo\Cloudflare\Requests\PostEventMoveToNewDSRequest $request,
		?bool $keepRawData = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId . '/move', null, $request);
	}


	/**
	 * Removes a tag from an event
	 */
	public function delete(string $eventId, \FoundryCo\Cloudflare\Requests\DeleteEventTagDeleteRequest $request): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/events/event_tag/' . $eventId);
	}


	/**
	 * Adds a tag to an event
	 */
	public function postEventTagCreate(
		string $eventId,
		\FoundryCo\Cloudflare\Requests\PostEventTagCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\EventEventTagCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/event_tag/' . $eventId . '/create', \FoundryCo\Cloudflare\Responses\EventEventTagCreate::class, $request);
	}


	/**
	 * GraphQL endpoint for event aggregation
	 */
	public function graphql(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/graphql', null, null);
	}


	/**
	 * List all saved event queries
	 */
	public function queries(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/queries', null, []);
	}


	/**
	 * Create a saved event query
	 */
	public function postEventQueryCreate(\FoundryCo\Cloudflare\Requests\PostEventQueryCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/queries/create', null, $request);
	}


	/**
	 * Read a saved event query
	 */
	public function getEventQueryRead(int $queryId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/queries/' . $queryId, null, []);
	}


	/**
	 * Update a saved event query
	 */
	public function postEventQueryUpdate(
		int $queryId,
		\FoundryCo\Cloudflare\Requests\PostEventQueryUpdateRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/queries/' . $queryId, null, $request);
	}


	/**
	 * Update a saved event query
	 */
	public function update(int $queryId, \FoundryCo\Cloudflare\Requests\PatchEventQueryUpdateRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/cloudforce-one/events/queries/' . $queryId, null, $request);
	}


	/**
	 * Delete a saved event query
	 */
	public function deleteEventQueryDelete(int $queryId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/events/queries/' . $queryId);
	}


	/**
	 * Reads raw data for an event by UUID
	 */
	public function raw(string $eventId, string $datasetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/raw/' . $datasetId . '/' . $eventId, null, []);
	}


	/**
	 * Removes an event reference
	 */
	public function relate(
		string $eventId,
		\FoundryCo\Cloudflare\Requests\DeleteEventReferenceDeleteRequest $request,
	): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/events/relate/' . $eventId);
	}


	/**
	 * Creates event references for a event
	 */
	public function postEventReferenceCreate(
		string $eventId,
		\FoundryCo\Cloudflare\Requests\PostEventReferenceCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\EventEventReferenceCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/relate/' . $eventId . '/create', \FoundryCo\Cloudflare\Responses\EventEventReferenceCreate::class, $request);
	}


	/**
	 * Create a relationship between two events
	 */
	public function postCreateEventRelationship(
		\FoundryCo\Cloudflare\Requests\PostCreateEventRelationshipRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/relationships/create', null, $request);
	}


	/**
	 * Bulk update events
	 */
	public function patchEventUpdateBulk(\FoundryCo\Cloudflare\Requests\PatchEventUpdateBulkRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/cloudforce-one/events/update/bulk', null, $request);
	}


	/**
	 * Deletes one or more events
	 */
	public function deleteEventDelete(string $datasetId, ?array $eventIds = null): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/events/' . $datasetId . '/delete');
	}


	/**
	 * Reads an event
	 */
	public function events(string $eventId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/' . $eventId, null, []);
	}


	/**
	 * Updates an event
	 */
	public function postEventUpdate(
		string $eventId,
		\FoundryCo\Cloudflare\Requests\PostEventUpdateRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/' . $eventId, null, $request);
	}


	/**
	 * Updates an event
	 */
	public function patchEventUpdate(
		string $eventId,
		\FoundryCo\Cloudflare\Requests\PatchEventUpdateRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/cloudforce-one/events/' . $eventId, null, $request);
	}


	/**
	 * Reads data for a raw event
	 */
	public function getEventRawRead(string $eventId, string $rawId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/' . $eventId . '/raw/' . $rawId, null, []);
	}


	/**
	 * Updates a raw event
	 */
	public function postEventRawUpdate(
		string $eventId,
		string $rawId,
		\FoundryCo\Cloudflare\Requests\PostEventRawUpdateRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/' . $eventId . '/raw/' . $rawId, null, $request);
	}


	/**
	 * Updates a raw event
	 */
	public function patchEventRawUpdate(
		string $eventId,
		string $rawId,
		\FoundryCo\Cloudflare\Requests\PatchEventRawUpdateRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/cloudforce-one/events/' . $eventId . '/raw/' . $rawId, null, $request);
	}


	/**
	 * Filter and list events related to specific event
	 */
	public function getEventRelationships(
		string $eventId,
		?\FoundryCo\Cloudflare\Enums\EventDirection $direction = null,
		?float $maxDepth = null,
		mixed $relationshipTypes = null,
		?array $indicatorTypeIds = null,
		?string $datasetId = null,
		?bool $includeParent = null,
		?float $page = null,
		?float $pageSize = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/' . $eventId . '/relationships', null, ['direction' => $direction ?? null, 'maxDepth' => $maxDepth ?? null, 'relationshipTypes' => $relationshipTypes ?? null, 'indicatorTypeIds' => $indicatorTypeIds ?? null, 'datasetId' => $datasetId ?? null, 'includeParent' => $includeParent ?? null, 'page' => $page ?? null, 'pageSize' => $pageSize ?? null]);
	}


	/**
	 * GraphQL endpoint for event aggregation
	 */
	public function postEventGraphQLV2(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/v2/events/graphql', null, null);
	}
}
