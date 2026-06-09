<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AutoragJobsResource
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
	): \FoundryCo\Cloudflare\Responses\AutoRAGJobsJobs
	{
		return $this->client->get('/accounts/' . $this->accountId . '/autorag/rags/' . $id . '/jobs', \FoundryCo\Cloudflare\Responses\AutoRAGJobsJobs::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Get a Job Details
	 */
	public function jobs(string $id, string $jobId): \FoundryCo\Cloudflare\Responses\AutoRAGJobsJob
	{
		return $this->client->get('/accounts/' . $this->accountId . '/autorag/rags/' . $id . '/jobs/' . $jobId, \FoundryCo\Cloudflare\Responses\AutoRAGJobsJob::class, []);
	}


	/**
	 * List Job Logs
	 */
	public function logs(
		string $id,
		string $jobId,
		?int $page = null,
		?int $perPage = null,
	): \FoundryCo\Cloudflare\Responses\AutoRAGJobsLogs
	{
		return $this->client->get('/accounts/' . $this->accountId . '/autorag/rags/' . $id . '/jobs/' . $jobId . '/logs', \FoundryCo\Cloudflare\Responses\AutoRAGJobsLogs::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}
}
