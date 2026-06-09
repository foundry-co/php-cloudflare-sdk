<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarDatasetsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List datasets
	 */
	public function list(
		?int $limit = null,
		?int $offset = null,
		?\FoundryCo\Cloudflare\Enums\RadarDatasetsDatasetType $datasetType = null,
		?\DateTimeImmutable $date = null,
		?\FoundryCo\Cloudflare\Enums\RadarDatasetsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarDatasetsDatasets
	{
		return $this->client->get('/radar/datasets', \FoundryCo\Cloudflare\Responses\RadarDatasetsDatasets::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null, 'datasetType' => $datasetType ?? null, 'date' => $date ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get dataset download URL
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\RadarPostReportsDatasetDownloadUrlRequest $request,
		?\FoundryCo\Cloudflare\Enums\RadarDatasetsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarDatasetsUrl
	{
		return $this->client->post('/radar/datasets/download', \FoundryCo\Cloudflare\Responses\RadarDatasetsUrl::class, $request);
	}


	/**
	 * Get dataset CSV stream
	 */
	public function get(string $alias): mixed
	{
		return $this->client->get('/radar/datasets/' . $alias, null, []);
	}
}
