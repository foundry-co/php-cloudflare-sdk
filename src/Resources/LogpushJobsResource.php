<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class LogpushJobsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List fields
	 */
	public function get(\FoundryCo\Cloudflare\Enums\LogpushJobsForAZoneDatasetId $datasetId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logpush/datasets/' . $datasetId . '/fields', null, []);
	}


	/**
	 * List Logpush jobs for a dataset
	 */
	public function jobs(
		\FoundryCo\Cloudflare\Enums\LogpushJobsForAZoneDatasetId $datasetId,
	): \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneJobs
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logpush/datasets/' . $datasetId . '/jobs', \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneJobs::class, []);
	}


	/**
	 * List Logpush jobs
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneJobs
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logpush/jobs', \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneJobs::class, []);
	}


	/**
	 * Create Logpush job
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\PostZonesZoneIdLogpushJobsRequest $request,
	): \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneJobs
	{
		return $this->client->post('/zones/' . $this->zoneId . '/logpush/jobs', \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneJobs::class, $request);
	}


	/**
	 * Get Logpush job details
	 */
	public function getZonesZoneIdLogpushJobsJobId(int $jobId): \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneId
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logpush/jobs/' . $jobId, \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneId::class, []);
	}


	/**
	 * Update Logpush job
	 */
	public function update(
		int $jobId,
		\FoundryCo\Cloudflare\Requests\PutZonesZoneIdLogpushJobsJobIdRequest $request,
	): \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneId
	{
		return $this->client->put('/zones/' . $this->zoneId . '/logpush/jobs/' . $jobId, \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneId::class, $request);
	}


	/**
	 * Delete Logpush job
	 */
	public function delete(int $jobId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/logpush/jobs/' . $jobId);
	}


	/**
	 * Get ownership challenge
	 */
	public function ownership(
		\FoundryCo\Cloudflare\Requests\PostZonesZoneIdLogpushOwnershipRequest $request,
	): \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneOwnership
	{
		return $this->client->post('/zones/' . $this->zoneId . '/logpush/ownership', \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneOwnership::class, $request);
	}


	/**
	 * Validate ownership challenge
	 */
	public function validate(
		\FoundryCo\Cloudflare\Requests\PostZonesZoneIdLogpushOwnershipValidateRequest $request,
	): \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneValidate
	{
		return $this->client->post('/zones/' . $this->zoneId . '/logpush/ownership/validate', \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneValidate::class, $request);
	}


	/**
	 * Validate destination
	 */
	public function destination(
		\FoundryCo\Cloudflare\Requests\PostZonesZoneIdLogpushValidateDestinationRequest $request,
	): \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneDestination
	{
		return $this->client->post('/zones/' . $this->zoneId . '/logpush/validate/destination', \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneDestination::class, $request);
	}


	/**
	 * Check destination exists
	 */
	public function exists(
		\FoundryCo\Cloudflare\Requests\PostZonesZoneIdLogpushValidateDestinationExistsRequest $request,
	): \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneExists
	{
		return $this->client->post('/zones/' . $this->zoneId . '/logpush/validate/destination/exists', \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneExists::class, $request);
	}


	/**
	 * Validate origin
	 */
	public function origin(
		\FoundryCo\Cloudflare\Requests\PostZonesZoneIdLogpushValidateOriginRequest $request,
	): \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneOrigin
	{
		return $this->client->post('/zones/' . $this->zoneId . '/logpush/validate/origin', \FoundryCo\Cloudflare\Responses\LogpushJobsForAZoneOrigin::class, $request);
	}
}
