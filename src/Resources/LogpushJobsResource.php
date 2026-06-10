<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function jobs(\FoundryCo\Cloudflare\Enums\LogpushJobsForAZoneDatasetId $datasetId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logpush/datasets/' . $datasetId . '/jobs', \FoundryCo\Cloudflare\Responses\GetZonesZoneIdLogpushDatasetsDatasetIdJobs::class, []);
	}


	/**
	 * List Logpush jobs
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logpush/jobs', \FoundryCo\Cloudflare\Responses\GetZonesZoneIdLogpushJobs::class, []);
	}


	/**
	 * Create Logpush job
	 */
	public function create(\FoundryCo\Cloudflare\Requests\PostZonesZoneIdLogpushJobsRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/logpush/jobs', \FoundryCo\Cloudflare\Responses\PostZonesZoneIdLogpushJobs::class, $request);
	}


	/**
	 * Get Logpush job details
	 */
	public function getZonesZoneIdLogpushJobsJobId(int $jobId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logpush/jobs/' . $jobId, \FoundryCo\Cloudflare\Responses\GetZonesZoneIdLogpushJobsJobId::class, []);
	}


	/**
	 * Update Logpush job
	 */
	public function update(
		int $jobId,
		\FoundryCo\Cloudflare\Requests\PutZonesZoneIdLogpushJobsJobIdRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/logpush/jobs/' . $jobId, \FoundryCo\Cloudflare\Responses\PutZonesZoneIdLogpushJobsJobId::class, $request);
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
	public function ownership(\FoundryCo\Cloudflare\Requests\PostZonesZoneIdLogpushOwnershipRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/logpush/ownership', \FoundryCo\Cloudflare\Responses\PostZonesZoneIdLogpushOwnership::class, $request);
	}


	/**
	 * Validate ownership challenge
	 */
	public function validate(
		\FoundryCo\Cloudflare\Requests\PostZonesZoneIdLogpushOwnershipValidateRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/logpush/ownership/validate', \FoundryCo\Cloudflare\Responses\PostZonesZoneIdLogpushOwnershipValidate::class, $request);
	}


	/**
	 * Validate destination
	 */
	public function destination(
		\FoundryCo\Cloudflare\Requests\PostZonesZoneIdLogpushValidateDestinationRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/logpush/validate/destination', \FoundryCo\Cloudflare\Responses\PostZonesZoneIdLogpushValidateDestination::class, $request);
	}


	/**
	 * Check destination exists
	 */
	public function exists(
		\FoundryCo\Cloudflare\Requests\PostZonesZoneIdLogpushValidateDestinationExistsRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/logpush/validate/destination/exists', \FoundryCo\Cloudflare\Responses\PostZonesZoneIdLogpushValidateDestinationExists::class, $request);
	}


	/**
	 * Validate origin
	 */
	public function origin(\FoundryCo\Cloudflare\Requests\PostZonesZoneIdLogpushValidateOriginRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/logpush/validate/origin', \FoundryCo\Cloudflare\Responses\PostZonesZoneIdLogpushValidateOrigin::class, $request);
	}
}
