<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarLayer7AttacksResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get layer 7 attacks by HTTP method summary
	 */
	public function list(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $httpVersion = null,
		?array $mitigationProduct = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksMethod
	{
		return $this->client->get('/radar/attacks/layer7/summary/http_method', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksMethod::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'httpVersion' => $httpVersion ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 7 attacks by HTTP version summary
	 */
	public function httpVersion(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $httpMethod = null,
		?array $mitigationProduct = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksVersion
	{
		return $this->client->get('/radar/attacks/layer7/summary/http_version', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksVersion::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 7 attacks by targeted industry summary
	 */
	public function industry(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $httpVersion = null,
		?array $httpMethod = null,
		?array $mitigationProduct = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksIndustry
	{
		return $this->client->get('/radar/attacks/layer7/summary/industry', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksIndustry::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'httpVersion' => $httpVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 7 attacks by IP version summary
	 */
	public function ipVersion(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $httpVersion = null,
		?array $httpMethod = null,
		?array $mitigationProduct = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksVersion
	{
		return $this->client->get('/radar/attacks/layer7/summary/ip_version', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksVersion::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'httpVersion' => $httpVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 7 attacks by managed rules summary
	 */
	public function managedRules(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $httpVersion = null,
		?array $httpMethod = null,
		?array $mitigationProduct = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksRules
	{
		return $this->client->get('/radar/attacks/layer7/summary/managed_rules', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksRules::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'httpVersion' => $httpVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 7 attacks by mitigation product summary
	 */
	public function mitigationProduct(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $httpVersion = null,
		?array $httpMethod = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksProduct
	{
		return $this->client->get('/radar/attacks/layer7/summary/mitigation_product', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksProduct::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'httpVersion' => $httpVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 7 attacks by targeted vertical summary
	 */
	public function vertical(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $httpVersion = null,
		?array $httpMethod = null,
		?array $mitigationProduct = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksVertical
	{
		return $this->client->get('/radar/attacks/layer7/summary/vertical', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksVertical::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'httpVersion' => $httpVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 7 attacks summary by dimension
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksDimension $dimension,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $httpVersion = null,
		?array $httpMethod = null,
		?array $mitigationProduct = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksSummary
	{
		return $this->client->get('/radar/attacks/layer7/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksSummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'httpVersion' => $httpVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 7 attacks time series
	 */
	public function timeseries(
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksNormalization $normalization = null,
		?array $ipVersion = null,
		?array $httpVersion = null,
		?array $httpMethod = null,
		?array $mitigationProduct = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksTimeseries
	{
		return $this->client->get('/radar/attacks/layer7/timeseries', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksTimeseries::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'normalization' => $normalization ?? null, 'ipVersion' => $ipVersion ?? null, 'httpVersion' => $httpVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 7 attacks by HTTP method time series
	 */
	public function httpMethod(
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $httpVersion = null,
		?array $mitigationProduct = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksNormalization $normalization = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksMethod
	{
		return $this->client->get('/radar/attacks/layer7/timeseries_groups/http_method', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksMethod::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'httpVersion' => $httpVersion ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'normalization' => $normalization ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 7 attacks by HTTP version time series
	 */
	public function radarGetAttacksLayer7TimeseriesGroupByHttpVersion(
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $httpMethod = null,
		?array $mitigationProduct = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksVersion
	{
		return $this->client->get('/radar/attacks/layer7/timeseries_groups/http_version', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksVersion::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'normalization' => $normalization ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 7 attacks by target industries time series
	 */
	public function radarGetAttacksLayer7TimeseriesGroupByIndustry(
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $httpVersion = null,
		?array $httpMethod = null,
		?array $mitigationProduct = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksNormalization $normalization = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksIndustry
	{
		return $this->client->get('/radar/attacks/layer7/timeseries_groups/industry', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksIndustry::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'httpVersion' => $httpVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'normalization' => $normalization ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 7 attacks by IP version time series
	 */
	public function radarGetAttacksLayer7TimeseriesGroupByIpVersion(
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $httpVersion = null,
		?array $httpMethod = null,
		?array $mitigationProduct = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksVersion
	{
		return $this->client->get('/radar/attacks/layer7/timeseries_groups/ip_version', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksVersion::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'httpVersion' => $httpVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'normalization' => $normalization ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 7 attacks by managed rules time series
	 */
	public function radarGetAttacksLayer7TimeseriesGroupByManagedRules(
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $httpVersion = null,
		?array $httpMethod = null,
		?array $mitigationProduct = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksNormalization $normalization = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksRules
	{
		return $this->client->get('/radar/attacks/layer7/timeseries_groups/managed_rules', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksRules::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'httpVersion' => $httpVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'normalization' => $normalization ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 7 attacks by mitigation product time series
	 */
	public function radarGetAttacksLayer7TimeseriesGroupByMitigationProduct(
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $httpVersion = null,
		?array $httpMethod = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksNormalization $normalization = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksProduct
	{
		return $this->client->get('/radar/attacks/layer7/timeseries_groups/mitigation_product', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksProduct::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'httpVersion' => $httpVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'normalization' => $normalization ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 7 attacks by vertical time series
	 */
	public function radarGetAttacksLayer7TimeseriesGroupByVertical(
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $httpVersion = null,
		?array $httpMethod = null,
		?array $mitigationProduct = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksNormalization $normalization = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksVertical
	{
		return $this->client->get('/radar/attacks/layer7/timeseries_groups/vertical', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksVertical::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'httpVersion' => $httpVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'normalization' => $normalization ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get layer 7 attacks time series grouped by dimension
	 */
	public function timeseriesGroups(
		\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksDimension $dimension,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $httpVersion = null,
		?array $httpMethod = null,
		?array $mitigationProduct = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksNormalization $normalization = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksGroup
	{
		return $this->client->get('/radar/attacks/layer7/timeseries_groups/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksGroup::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'httpVersion' => $httpVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'normalization' => $normalization ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top origin ASes of layer 7 attacks
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
		?array $httpVersion = null,
		?array $httpMethod = null,
		?array $mitigationProduct = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksAs
	{
		return $this->client->get('/radar/attacks/layer7/top/ases/origin', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksAs::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'httpVersion' => $httpVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top layer 7 attack pairs (origin and target locations)
	 */
	public function attacks(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $mitigationProduct = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksLimitDirection $limitDirection = null,
		?int $limitPerLocation = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksAttacks
	{
		return $this->client->get('/radar/attacks/layer7/top/attacks', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksAttacks::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'limitDirection' => $limitDirection ?? null, 'limitPerLocation' => $limitPerLocation ?? null, 'normalization' => $normalization ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top industries targeted by layer 7 attacks
	 */
	public function radarGetAttacksLayer7TopIndustries(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $httpVersion = null,
		?array $httpMethod = null,
		?array $mitigationProduct = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksIndustries
	{
		return $this->client->get('/radar/attacks/layer7/top/industry', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksIndustries::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'httpVersion' => $httpVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top origin locations of layer 7 attacks
	 */
	public function radarGetAttacksLayer7TopOriginLocation(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $httpVersion = null,
		?array $httpMethod = null,
		?array $mitigationProduct = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksLocation
	{
		return $this->client->get('/radar/attacks/layer7/top/locations/origin', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksLocation::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'httpVersion' => $httpVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top target locations of layer 7 attacks
	 */
	public function target(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $continent = null,
		?array $mitigationProduct = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksLocation
	{
		return $this->client->get('/radar/attacks/layer7/top/locations/target', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksLocation::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'continent' => $continent ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top verticals targeted by layer 7 attacks
	 */
	public function radarGetAttacksLayer7TopVerticals(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $ipVersion = null,
		?array $httpVersion = null,
		?array $httpMethod = null,
		?array $mitigationProduct = null,
		?\FoundryCo\Cloudflare\Enums\RadarLayer7AttacksFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksVerticals
	{
		return $this->client->get('/radar/attacks/layer7/top/vertical', \FoundryCo\Cloudflare\Responses\RadarLayer7AttacksVerticals::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'ipVersion' => $ipVersion ?? null, 'httpVersion' => $httpVersion ?? null, 'httpMethod' => $httpMethod ?? null, 'mitigationProduct' => $mitigationProduct ?? null, 'format' => $format ?? null]);
	}
}
