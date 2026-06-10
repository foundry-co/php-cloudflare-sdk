<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarLayer3AttacksResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get layer 3 attacks by bitrate summary
	 */
	public function list(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/summary/bitrate', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3SummaryByBitrate::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'protocol' => $protocol ?? null, 'direction' => $direction ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 3 attacks by duration summary
	 */
	public function duration(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/summary/duration', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3SummaryByDuration::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'protocol' => $protocol ?? null, 'direction' => $direction ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 3 attacks by targeted industry summary
	 */
	public function industry(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDirection $direction = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/summary/industry', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3SummaryByIndustry::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'protocol' => $protocol ?? null, 'direction' => $direction ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 3 attacks by IP version summary
	 */
	public function ipVersion(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/summary/ip_version', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3SummaryByIpVersion::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'protocol' => $protocol ?? null, 'direction' => $direction ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 3 attacks by protocol summary
	 */
	public function protocol(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/summary/protocol', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3SummaryByProtocol::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'direction' => $direction ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 3 attacks by vector summary
	 */
	public function vector(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDirection $direction = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/summary/vector', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3SummaryByVector::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'protocol' => $protocol ?? null, 'direction' => $direction ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 3 attacks by targeted vertical summary
	 */
	public function vertical(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDirection $direction = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/summary/vertical', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3SummaryByVertical::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'protocol' => $protocol ?? null, 'direction' => $direction ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 3 attacks summary by dimension
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDimension $dimension,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDirection $direction = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3Summary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'protocol' => $protocol ?? null, 'direction' => $direction ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 3 attacks by bytes time series
	 */
	public function timeseries(
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksMetric $metric = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/timeseries', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3TimeseriesByBytes::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'protocol' => $protocol ?? null, 'normalization' => $normalization ?? null, 'metric' => $metric ?? null, 'direction' => $direction ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 3 attacks by bitrate time series
	 */
	public function bitrate(
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/timeseries_groups/bitrate', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3TimeseriesGroupByBitrate::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'protocol' => $protocol ?? null, 'normalization' => $normalization ?? null, 'direction' => $direction ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 3 attacks by duration time series
	 */
	public function radarGetAttacksLayer3TimeseriesGroupByDuration(
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/timeseries_groups/duration', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3TimeseriesGroupByDuration::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'protocol' => $protocol ?? null, 'normalization' => $normalization ?? null, 'direction' => $direction ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 3 attacks by target industries time series
	 */
	public function radarGetAttacksLayer3TimeseriesGroupByIndustry(
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDirection $direction = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/timeseries_groups/industry', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3TimeseriesGroupByIndustry::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'protocol' => $protocol ?? null, 'normalization' => $normalization ?? null, 'direction' => $direction ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 3 attacks by IP version time series
	 */
	public function radarGetAttacksLayer3TimeseriesGroupByIpVersion(
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/timeseries_groups/ip_version', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3TimeseriesGroupByIpVersion::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'protocol' => $protocol ?? null, 'normalization' => $normalization ?? null, 'direction' => $direction ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 3 attacks by protocol time series
	 */
	public function radarGetAttacksLayer3TimeseriesGroupByProtocol(
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/timeseries_groups/protocol', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3TimeseriesGroupByProtocol::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'normalization' => $normalization ?? null, 'direction' => $direction ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 3 attacks by vector time series
	 */
	public function radarGetAttacksLayer3TimeseriesGroupByVector(
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDirection $direction = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/timeseries_groups/vector', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3TimeseriesGroupByVector::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'protocol' => $protocol ?? null, 'normalization' => $normalization ?? null, 'direction' => $direction ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 3 attacks by vertical time series
	 */
	public function radarGetAttacksLayer3TimeseriesGroupByVertical(
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDirection $direction = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/timeseries_groups/vertical', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3TimeseriesGroupByVertical::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'protocol' => $protocol ?? null, 'normalization' => $normalization ?? null, 'direction' => $direction ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 3 attacks time series grouped by dimension
	 */
	public function timeseriesGroups(
		\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDimension $dimension,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksDirection $direction = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/timeseries_groups/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3TimeseriesGroup::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'protocol' => $protocol ?? null, 'normalization' => $normalization ?? null, 'direction' => $direction ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top layer 3 attack pairs (origin and target locations)
	 */
	public function attacks(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksLimitDirection $limitDirection = null,
		?int $limitPerLocation = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksMagnitude $magnitude = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/top/attacks', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3TopAttacks::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'protocol' => $protocol ?? null, 'limitDirection' => $limitDirection ?? null, 'limitPerLocation' => $limitPerLocation ?? null, 'magnitude' => $magnitude ?? null, 'normalization' => $normalization ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top industries targeted by layer 3 attacks
	 */
	public function radarGetAttacksLayer3TopIndustries(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/top/industry', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3TopIndustries::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'protocol' => $protocol ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top origin locations of layer 3 attacks
	 */
	public function origin(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/top/locations/origin', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3TopOriginLocations::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'protocol' => $protocol ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top target locations of layer 3 attacks
	 */
	public function target(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/top/locations/target', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3TopTargetLocations::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'protocol' => $protocol ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top verticals targeted by layer 3 attacks
	 */
	public function radarGetAttacksLayer3TopVerticals(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $protocol = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer3AttacksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/attacks/layer3/top/vertical', \FoundryCo\Cloudflare\Responses\RadarGetAttacksLayer3TopVerticals::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'protocol' => $protocol ?? null, 'format' => $format ?? null]);
	}
}
