<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AISearchInstancesJobsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Jobs
	 */
	public function get(string $id, ?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/instances/' . $id . '/jobs', \FoundryCo\Cloudflare\Responses\AiSearchInstanceListJobs::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create new job
	 */
	public function create(string $id, \FoundryCo\Cloudflare\Requests\AiSearchInstanceCreateJobRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/instances/' . $id . '/jobs', \FoundryCo\Cloudflare\Responses\AiSearchInstanceCreateJob::class, $request);
	}


	/**
	 * Get a Job Details
	 */
	public function jobs(string $id, string $jobId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/instances/' . $id . '/jobs/' . $jobId, \FoundryCo\Cloudflare\Responses\AiSearchInstanceGetJob::class, []);
	}


	/**
	 * Change Job Status
	 */
	public function update(
		string $id,
		string $jobId,
		\FoundryCo\Cloudflare\Requests\AiSearchInstanceChangeJobStatusRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/ai-search/instances/' . $id . '/jobs/' . $jobId, \FoundryCo\Cloudflare\Responses\AiSearchInstanceChangeJobStatus::class, $request);
	}


	/**
	 * List Job Logs
	 */
	public function logs(string $id, string $jobId, ?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/instances/' . $id . '/jobs/' . $jobId . '/logs', \FoundryCo\Cloudflare\Responses\AiSearchInstanceListJobLogs::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * List Jobs
	 */
	public function aiSearchNamespaceInstanceListJobs(
		string $id,
		string $name,
		?int $page = null,
		?int $perPage = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/jobs', \FoundryCo\Cloudflare\Responses\AiSearchNamespaceInstanceListJobs::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create new job
	 */
	public function aiSearchNamespaceInstanceCreateJob(
		string $id,
		string $name,
		\FoundryCo\Cloudflare\Requests\AiSearchNamespaceInstanceCreateJobRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/jobs', \FoundryCo\Cloudflare\Responses\AiSearchNamespaceInstanceCreateJob::class, $request);
	}


	/**
	 * Get a Job Details
	 */
	public function aiSearchNamespaceInstanceGetJob(string $id, string $jobId, string $name): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/jobs/' . $jobId, \FoundryCo\Cloudflare\Responses\AiSearchNamespaceInstanceGetJob::class, []);
	}


	/**
	 * Change Job Status
	 */
	public function aiSearchNamespaceInstanceChangeJobStatus(
		string $id,
		string $jobId,
		string $name,
		\FoundryCo\Cloudflare\Requests\AiSearchNamespaceInstanceChangeJobStatusRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/jobs/' . $jobId, \FoundryCo\Cloudflare\Responses\AiSearchNamespaceInstanceChangeJobStatus::class, $request);
	}


	/**
	 * List Job Logs
	 */
	public function aiSearchNamespaceInstanceListJobLogs(
		string $id,
		string $jobId,
		string $name,
		?int $page = null,
		?int $perPage = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/jobs/' . $jobId . '/logs', \FoundryCo\Cloudflare\Responses\AiSearchNamespaceInstanceListJobLogs::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}
}
