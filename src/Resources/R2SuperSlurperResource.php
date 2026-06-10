<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class R2SuperSlurperResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List jobs
	 */
	public function list(?int $limit = null, ?int $offset = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/slurper/jobs', \FoundryCo\Cloudflare\Responses\SlurperListJobs::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null]);
	}


	/**
	 * Create a job
	 */
	public function create(\FoundryCo\Cloudflare\Requests\SlurperCreateJobRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/slurper/jobs', \FoundryCo\Cloudflare\Responses\SlurperCreateJob::class, $request);
	}


	/**
	 * Abort all jobs
	 */
	public function update(): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/slurper/jobs/abortAll', null, null);
	}


	/**
	 * Get job details
	 */
	public function get(string $jobId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/slurper/jobs/' . $jobId, \FoundryCo\Cloudflare\Responses\SlurperGetJob::class, []);
	}


	/**
	 * Delete a job
	 */
	public function delete(string $jobId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/slurper/jobs/' . $jobId);
	}


	/**
	 * Abort a job
	 */
	public function abort(string $jobId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/slurper/jobs/' . $jobId . '/abort', null, null);
	}


	/**
	 * Get job logs
	 */
	public function logs(string $jobId, ?int $limit = null, ?int $offset = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/slurper/jobs/' . $jobId . '/logs', \FoundryCo\Cloudflare\Responses\SlurperGetJobLogs::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null]);
	}


	/**
	 * Pause a job
	 */
	public function pause(string $jobId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/slurper/jobs/' . $jobId . '/pause', null, null);
	}


	/**
	 * Get job progress
	 */
	public function progress(string $jobId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/slurper/jobs/' . $jobId . '/progress', \FoundryCo\Cloudflare\Responses\SlurperGetJobProgress::class, []);
	}


	/**
	 * Resume a job
	 */
	public function resume(string $jobId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/slurper/jobs/' . $jobId . '/resume', null, null);
	}


	/**
	 * Check source connectivity
	 */
	public function connectivityPrecheck(): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/slurper/source/connectivity-precheck', \FoundryCo\Cloudflare\Responses\SlurperCheckSourceConnectivity::class, null);
	}


	/**
	 * Check target connectivity
	 */
	public function slurperCheckTargetConnectivity(
		\FoundryCo\Cloudflare\Requests\SlurperCheckTargetConnectivityRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/slurper/target/connectivity-precheck', \FoundryCo\Cloudflare\Responses\SlurperCheckTargetConnectivity::class, $request);
	}
}
