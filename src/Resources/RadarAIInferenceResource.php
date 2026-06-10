<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarAIInferenceResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get Workers AI models summary
	 */
	public function list(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarAIInferenceFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ai/inference/summary/model', \FoundryCo\Cloudflare\Responses\RadarGetAiInferenceSummaryByModel::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get Workers AI tasks summary
	 */
	public function task(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarAIInferenceFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ai/inference/summary/task', \FoundryCo\Cloudflare\Responses\RadarGetAiInferenceSummaryByTask::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get Workers AI inference distribution by dimension
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\RadarAIInferenceDimension $dimension,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarAIInferenceFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ai/inference/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetAiInferenceSummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get Workers AI models time series
	 */
	public function model(
		?\FoundryCo\Cloudflare\Enums\RadarAIInferenceAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarAIInferenceFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ai/inference/timeseries_groups/model', \FoundryCo\Cloudflare\Responses\RadarGetAiInferenceTimeseriesGroupByModel::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get Workers AI tasks time series
	 */
	public function radarGetAiInferenceTimeseriesGroupByTask(
		?\FoundryCo\Cloudflare\Enums\RadarAIInferenceAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarAIInferenceFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ai/inference/timeseries_groups/task', \FoundryCo\Cloudflare\Responses\RadarGetAiInferenceTimeseriesGroupByTask::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get time series distribution of Workers AI inference by dimension.
	 */
	public function timeseriesGroups(
		\FoundryCo\Cloudflare\Enums\RadarAIInferenceDimension $dimension,
		?\FoundryCo\Cloudflare\Enums\RadarAIInferenceAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarAIInferenceNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarAIInferenceFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ai/inference/timeseries_groups/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetAiInferenceTimeseriesGroup::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'normalization' => $normalization ?? null, 'format' => $format ?? null]);
	}
}
