<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(?int $limit = null, ?int $offset = null): \FoundryCo\Cloudflare\Responses\R2SuperSlurperJobs
	{
		return $this->client->get('/accounts/' . $this->accountId . '/slurper/jobs', \FoundryCo\Cloudflare\Responses\R2SuperSlurperJobs::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null]);
	}


	/**
	 * Create a job
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\SlurperCreateJobRequest $request,
	): \FoundryCo\Cloudflare\Responses\R2SuperSlurperJob
	{
		return $this->client->post('/accounts/' . $this->accountId . '/slurper/jobs', \FoundryCo\Cloudflare\Responses\R2SuperSlurperJob::class, $request);
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
	public function get(string $jobId): \FoundryCo\Cloudflare\Responses\R2SuperSlurperJob
	{
		return $this->client->get('/accounts/' . $this->accountId . '/slurper/jobs/' . $jobId, \FoundryCo\Cloudflare\Responses\R2SuperSlurperJob::class, []);
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
	public function logs(
		string $jobId,
		?int $limit = null,
		?int $offset = null,
	): \FoundryCo\Cloudflare\Responses\R2SuperSlurperLogs
	{
		return $this->client->get('/accounts/' . $this->accountId . '/slurper/jobs/' . $jobId . '/logs', \FoundryCo\Cloudflare\Responses\R2SuperSlurperLogs::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null]);
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
	public function progress(string $jobId): \FoundryCo\Cloudflare\Responses\R2SuperSlurperProgress
	{
		return $this->client->get('/accounts/' . $this->accountId . '/slurper/jobs/' . $jobId . '/progress', \FoundryCo\Cloudflare\Responses\R2SuperSlurperProgress::class, []);
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
	public function connectivityPrecheck(): \FoundryCo\Cloudflare\Responses\R2SuperSlurperConnectivity
	{
		return $this->client->put('/accounts/' . $this->accountId . '/slurper/source/connectivity-precheck', \FoundryCo\Cloudflare\Responses\R2SuperSlurperConnectivity::class, null);
	}


	/**
	 * Check target connectivity
	 */
	public function slurperCheckTargetConnectivity(
		\FoundryCo\Cloudflare\Requests\SlurperCheckTargetConnectivityRequest $request,
	): \FoundryCo\Cloudflare\Responses\R2SuperSlurperConnectivity
	{
		return $this->client->put('/accounts/' . $this->accountId . '/slurper/target/connectivity-precheck', \FoundryCo\Cloudflare\Responses\R2SuperSlurperConnectivity::class, $request);
	}
}
