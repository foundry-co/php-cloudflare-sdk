<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkersResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List builds by script
	 */
	public function get(string $externalScriptId, ?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/builds/workers/' . $externalScriptId . '/builds', null, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * List triggers by script
	 */
	public function triggers(string $externalScriptId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/builds/workers/' . $externalScriptId . '/triggers', null, []);
	}


	/**
	 * List Workers
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\WorkersOrderBy $orderBy = null,
		?\FoundryCo\Cloudflare\Enums\WorkersOrder $order = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/workers', \FoundryCo\Cloudflare\Responses\ListWorkers::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'orderBy' => $orderBy ?? null, 'order' => $order ?? null]);
	}


	/**
	 * Create Worker
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CreateWorkerRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workers/workers', \FoundryCo\Cloudflare\Responses\CreateWorker::class, $request);
	}


	/**
	 * Get Worker
	 */
	public function workers(string $workerId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/workers/' . $workerId, \FoundryCo\Cloudflare\Responses\GetWorker::class, []);
	}


	/**
	 * Update Worker
	 */
	public function update(string $workerId, \FoundryCo\Cloudflare\Requests\UpdateWorkerRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/workers/workers/' . $workerId, \FoundryCo\Cloudflare\Responses\UpdateWorker::class, $request);
	}


	/**
	 * Edit Worker
	 */
	public function editWorker(string $workerId, \FoundryCo\Cloudflare\Requests\EditWorkerRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/workers/workers/' . $workerId, \FoundryCo\Cloudflare\Responses\EditWorker::class, $request);
	}


	/**
	 * Delete Worker
	 */
	public function delete(string $workerId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/workers/workers/' . $workerId);
	}
}
