<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkersPipelinesOtherResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * [DEPRECATED] List Pipelines
	 */
	public function list(?string $search = null, ?string $page = null, ?string $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pipelines', null, ['search' => $search ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * [DEPRECATED] Create Pipeline
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\PostV4AccountsByAccountIdPipelinesDeprecatedRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pipelines', \FoundryCo\Cloudflare\Responses\PostV4AccountsByAccountIdPipelinesDeprecated::class, $request);
	}


	/**
	 * List Pipelines
	 */
	public function pipelines(?float $page = null, ?float $perPage = null, ?string $name = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pipelines/v1/pipelines', \FoundryCo\Cloudflare\Responses\GetV4AccountsByAccountIdPipelinesV1Pipelines::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'name' => $name ?? null]);
	}


	/**
	 * Create Pipeline
	 */
	public function postV4AccountsByAccountIdPipelinesV1Pipelines(
		\FoundryCo\Cloudflare\Requests\PostV4AccountsByAccountIdPipelinesV1PipelinesRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pipelines/v1/pipelines', \FoundryCo\Cloudflare\Responses\PostV4AccountsByAccountIdPipelinesV1Pipelines::class, $request);
	}


	/**
	 * Get Pipeline Details
	 */
	public function get(string $pipelineId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pipelines/v1/pipelines/' . $pipelineId, \FoundryCo\Cloudflare\Responses\GetV4AccountsByAccountIdPipelinesV1PipelinesByPipelineId::class, []);
	}


	/**
	 * Delete Pipelines
	 */
	public function delete(string $pipelineId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/pipelines/v1/pipelines/' . $pipelineId);
	}


	/**
	 * List Sinks
	 */
	public function sinks(
		?string $pipelineId = null,
		?string $name = null,
		?float $page = null,
		?float $perPage = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pipelines/v1/sinks', \FoundryCo\Cloudflare\Responses\GetV4AccountsByAccountIdPipelinesV1Sinks::class, ['pipelineId' => $pipelineId ?? null, 'name' => $name ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create Sink
	 */
	public function postV4AccountsByAccountIdPipelinesV1Sinks(
		\FoundryCo\Cloudflare\Requests\PostV4AccountsByAccountIdPipelinesV1SinksRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pipelines/v1/sinks', \FoundryCo\Cloudflare\Responses\PostV4AccountsByAccountIdPipelinesV1Sinks::class, $request);
	}


	/**
	 * Get Sink Details
	 */
	public function getV4AccountsByAccountIdPipelinesV1SinksBySinkId(string $sinkId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pipelines/v1/sinks/' . $sinkId, \FoundryCo\Cloudflare\Responses\GetV4AccountsByAccountIdPipelinesV1SinksBySinkId::class, []);
	}


	/**
	 * Delete Sink
	 */
	public function deleteV4AccountsByAccountIdPipelinesV1SinksBySinkId(string $sinkId, ?string $force = null): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/pipelines/v1/sinks/' . $sinkId);
	}


	/**
	 * List Streams
	 */
	public function streams(
		?string $pipelineId = null,
		?string $name = null,
		?float $page = null,
		?float $perPage = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pipelines/v1/streams', \FoundryCo\Cloudflare\Responses\GetV4AccountsByAccountIdPipelinesV1Streams::class, ['pipelineId' => $pipelineId ?? null, 'name' => $name ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create Stream
	 */
	public function postV4AccountsByAccountIdPipelinesV1Streams(
		\FoundryCo\Cloudflare\Requests\PostV4AccountsByAccountIdPipelinesV1StreamsRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pipelines/v1/streams', \FoundryCo\Cloudflare\Responses\PostV4AccountsByAccountIdPipelinesV1Streams::class, $request);
	}


	/**
	 * Get Stream Details
	 */
	public function getV4AccountsByAccountIdPipelinesV1StreamsByStreamId(string $streamId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pipelines/v1/streams/' . $streamId, \FoundryCo\Cloudflare\Responses\GetV4AccountsByAccountIdPipelinesV1StreamsByStreamId::class, []);
	}


	/**
	 * Update Stream
	 */
	public function update(
		string $streamId,
		\FoundryCo\Cloudflare\Requests\PatchV4AccountsByAccountIdPipelinesV1StreamsByStreamIdRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/pipelines/v1/streams/' . $streamId, \FoundryCo\Cloudflare\Responses\PatchV4AccountsByAccountIdPipelinesV1StreamsByStreamId::class, $request);
	}


	/**
	 * Delete Stream
	 */
	public function deleteV4AccountsByAccountIdPipelinesV1StreamsByStreamId(
		string $streamId,
		?string $force = null,
	): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/pipelines/v1/streams/' . $streamId);
	}


	/**
	 * Validate SQL
	 */
	public function validateSql(
		\FoundryCo\Cloudflare\Requests\PostV4AccountsByAccountIdPipelinesV1ValidateSqlRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pipelines/v1/validate_sql', \FoundryCo\Cloudflare\Responses\PostV4AccountsByAccountIdPipelinesV1ValidateSql::class, $request);
	}


	/**
	 * [DEPRECATED] Get Pipeline
	 */
	public function getV4AccountsByAccountIdPipelinesByPipelineNameDeprecated(string $pipelineName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pipelines/' . $pipelineName, \FoundryCo\Cloudflare\Responses\GetV4AccountsByAccountIdPipelinesByPipelineNameDeprecated::class, []);
	}


	/**
	 * [DEPRECATED] Update Pipeline
	 */
	public function putV4AccountsByAccountIdPipelinesByPipelineNameDeprecated(
		string $pipelineName,
		\FoundryCo\Cloudflare\Requests\PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/pipelines/' . $pipelineName, \FoundryCo\Cloudflare\Responses\PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecated::class, $request);
	}


	/**
	 * [DEPRECATED] Delete Pipeline
	 */
	public function deleteV4AccountsByAccountIdPipelinesByPipelineNameDeprecated(string $pipelineName): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/pipelines/' . $pipelineName);
	}
}
