<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class QueueResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Event Subscriptions
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\QueueOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\QueueDirection $direction = null,
	): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->get('/accounts/' . $this->accountId . '/event_subscriptions/subscriptions', \FoundryCo\Cloudflare\Responses\QueueList::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create Event Subscription
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\SubscriptionsCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\QueueCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/event_subscriptions/subscriptions', \FoundryCo\Cloudflare\Responses\QueueCreate::class, $request);
	}


	/**
	 * Get Event Subscription
	 */
	public function get(string $subscriptionId): \FoundryCo\Cloudflare\Responses\QueueGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/event_subscriptions/subscriptions/' . $subscriptionId, \FoundryCo\Cloudflare\Responses\QueueGet::class, []);
	}


	/**
	 * Update Event Subscription
	 */
	public function update(
		string $subscriptionId,
		\FoundryCo\Cloudflare\Requests\SubscriptionsPatchRequest $request,
	): \FoundryCo\Cloudflare\Responses\QueuePatch
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/event_subscriptions/subscriptions/' . $subscriptionId, \FoundryCo\Cloudflare\Responses\QueuePatch::class, $request);
	}


	/**
	 * Delete Event Subscription
	 */
	public function delete(string $subscriptionId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/event_subscriptions/subscriptions/' . $subscriptionId);
	}


	/**
	 * List Queues
	 */
	public function queues(): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->get('/accounts/' . $this->accountId . '/queues', \FoundryCo\Cloudflare\Responses\QueueList::class, []);
	}


	/**
	 * Create Queue
	 */
	public function queuesCreate(
		\FoundryCo\Cloudflare\Requests\QueuesCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\QueueCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/queues', \FoundryCo\Cloudflare\Responses\QueueCreate::class, $request);
	}


	/**
	 * Get Queue
	 */
	public function queuesGet(string $queueId): \FoundryCo\Cloudflare\Responses\QueueGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/queues/' . $queueId, \FoundryCo\Cloudflare\Responses\QueueGet::class, []);
	}


	/**
	 * Update Queue
	 */
	public function queuesUpdate(
		string $queueId,
		\FoundryCo\Cloudflare\Requests\QueuesUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\QueueUpdate
	{
		return $this->client->put('/accounts/' . $this->accountId . '/queues/' . $queueId, \FoundryCo\Cloudflare\Responses\QueueUpdate::class, $request);
	}


	/**
	 * Update Queue
	 */
	public function queuesUpdatePartial(
		string $queueId,
		\FoundryCo\Cloudflare\Requests\QueuesUpdatePartialRequest $request,
	): \FoundryCo\Cloudflare\Responses\QueuePartial
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/queues/' . $queueId, \FoundryCo\Cloudflare\Responses\QueuePartial::class, $request);
	}


	/**
	 * Delete Queue
	 */
	public function queuesDelete(string $queueId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/queues/' . $queueId);
	}


	/**
	 * List Queue Consumers
	 */
	public function consumers(string $queueId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/queues/' . $queueId . '/consumers', null, []);
	}


	/**
	 * Create a Queue Consumer
	 */
	public function queuesCreateConsumer(string $queueId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/queues/' . $queueId . '/consumers', null, null);
	}


	/**
	 * Get Queue Consumer
	 */
	public function queuesGetConsumer(string $consumerId, string $queueId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/queues/' . $queueId . '/consumers/' . $consumerId, null, []);
	}


	/**
	 * Update Queue Consumer
	 */
	public function queuesUpdateConsumer(string $consumerId, string $queueId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/queues/' . $queueId . '/consumers/' . $consumerId, null, null);
	}


	/**
	 * Delete Queue Consumer
	 */
	public function queuesDeleteConsumer(string $consumerId, string $queueId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/queues/' . $queueId . '/consumers/' . $consumerId);
	}


	/**
	 * Push Message
	 */
	public function messages(
		string $queueId,
		\FoundryCo\Cloudflare\Requests\QueuesPushMessageRequest $request,
	): \FoundryCo\Cloudflare\Responses\QueueMessage
	{
		return $this->client->post('/accounts/' . $this->accountId . '/queues/' . $queueId . '/messages', \FoundryCo\Cloudflare\Responses\QueueMessage::class, $request);
	}


	/**
	 * Acknowledge + Retry Queue Messages
	 */
	public function ack(
		string $queueId,
		\FoundryCo\Cloudflare\Requests\QueuesAckMessagesRequest $request,
	): \FoundryCo\Cloudflare\Responses\QueueMessages
	{
		return $this->client->post('/accounts/' . $this->accountId . '/queues/' . $queueId . '/messages/ack', \FoundryCo\Cloudflare\Responses\QueueMessages::class, $request);
	}


	/**
	 * Push Message Batch
	 */
	public function batch(
		string $queueId,
		\FoundryCo\Cloudflare\Requests\QueuesPushMessagesRequest $request,
	): \FoundryCo\Cloudflare\Responses\QueueMessages
	{
		return $this->client->post('/accounts/' . $this->accountId . '/queues/' . $queueId . '/messages/batch', \FoundryCo\Cloudflare\Responses\QueueMessages::class, $request);
	}


	/**
	 * Preview Queue Messages
	 */
	public function preview(
		string $queueId,
		\FoundryCo\Cloudflare\Requests\QueuesPreviewMessagesRequest $request,
	): \FoundryCo\Cloudflare\Responses\QueueMessages
	{
		return $this->client->post('/accounts/' . $this->accountId . '/queues/' . $queueId . '/messages/preview', \FoundryCo\Cloudflare\Responses\QueueMessages::class, $request);
	}


	/**
	 * Delete Previewed Queue Messages
	 */
	public function queuesAckPreviewMessages(
		string $queueId,
		\FoundryCo\Cloudflare\Requests\QueuesAckPreviewMessagesRequest $request,
	): \FoundryCo\Cloudflare\Responses\QueueMessages
	{
		return $this->client->post('/accounts/' . $this->accountId . '/queues/' . $queueId . '/messages/preview/ack', \FoundryCo\Cloudflare\Responses\QueueMessages::class, $request);
	}


	/**
	 * Pull Queue Messages
	 */
	public function pull(
		string $queueId,
		\FoundryCo\Cloudflare\Requests\QueuesPullMessagesRequest $request,
	): \FoundryCo\Cloudflare\Responses\QueueMessages
	{
		return $this->client->post('/accounts/' . $this->accountId . '/queues/' . $queueId . '/messages/pull', \FoundryCo\Cloudflare\Responses\QueueMessages::class, $request);
	}


	/**
	 * Get Queue Metrics
	 */
	public function metrics(string $queueId): \FoundryCo\Cloudflare\Responses\QueueMetrics
	{
		return $this->client->get('/accounts/' . $this->accountId . '/queues/' . $queueId . '/metrics', \FoundryCo\Cloudflare\Responses\QueueMetrics::class, []);
	}


	/**
	 * Get Queue Purge Status
	 */
	public function purge(string $queueId): \FoundryCo\Cloudflare\Responses\QueueGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/queues/' . $queueId . '/purge', \FoundryCo\Cloudflare\Responses\QueueGet::class, []);
	}


	/**
	 * Purge Queue
	 */
	public function queuesPurge(
		string $queueId,
		\FoundryCo\Cloudflare\Requests\QueuesPurgeRequest $request,
	): \FoundryCo\Cloudflare\Responses\QueuePurge
	{
		return $this->client->post('/accounts/' . $this->accountId . '/queues/' . $queueId . '/purge', \FoundryCo\Cloudflare\Responses\QueuePurge::class, $request);
	}
}
