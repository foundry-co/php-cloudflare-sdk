<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function get(
		string $id,
		?int $page = null,
		?int $perPage = null,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsJobs
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/instances/' . $id . '/jobs', \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsJobs::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create new job
	 */
	public function create(
		string $id,
		\FoundryCo\Cloudflare\Requests\AiSearchInstanceCreateJobRequest $request,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsJob
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/instances/' . $id . '/jobs', \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsJob::class, $request);
	}


	/**
	 * Get a Job Details
	 */
	public function jobs(string $id, string $jobId): \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsJob
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/instances/' . $id . '/jobs/' . $jobId, \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsJob::class, []);
	}


	/**
	 * Change Job Status
	 */
	public function update(
		string $id,
		string $jobId,
		\FoundryCo\Cloudflare\Requests\AiSearchInstanceChangeJobStatusRequest $request,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsStatus
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/ai-search/instances/' . $id . '/jobs/' . $jobId, \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsStatus::class, $request);
	}


	/**
	 * List Job Logs
	 */
	public function logs(
		string $id,
		string $jobId,
		?int $page = null,
		?int $perPage = null,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsLogs
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/instances/' . $id . '/jobs/' . $jobId . '/logs', \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsLogs::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * List Jobs
	 */
	public function aiSearchNamespaceInstanceListJobs(
		string $id,
		string $name,
		?int $page = null,
		?int $perPage = null,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsJobs
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/jobs', \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsJobs::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create new job
	 */
	public function aiSearchNamespaceInstanceCreateJob(
		string $id,
		string $name,
		\FoundryCo\Cloudflare\Requests\AiSearchNamespaceInstanceCreateJobRequest $request,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsJob
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/jobs', \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsJob::class, $request);
	}


	/**
	 * Get a Job Details
	 */
	public function aiSearchNamespaceInstanceGetJob(
		string $id,
		string $jobId,
		string $name,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsJob
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/jobs/' . $jobId, \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsJob::class, []);
	}


	/**
	 * Change Job Status
	 */
	public function aiSearchNamespaceInstanceChangeJobStatus(
		string $id,
		string $jobId,
		string $name,
		\FoundryCo\Cloudflare\Requests\AiSearchNamespaceInstanceChangeJobStatusRequest $request,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsStatus
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/jobs/' . $jobId, \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsStatus::class, $request);
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
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsLogs
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/jobs/' . $jobId . '/logs', \FoundryCo\Cloudflare\Responses\AISearchInstancesJobsLogs::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}
}
