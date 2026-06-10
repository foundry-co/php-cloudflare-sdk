<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarAs112Resource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get AS112 DNS queries by DNSSEC summary
	 */
	public function list(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/summary/dnssec', \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112TimeseriesByDnssec::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AS112 DNS queries by EDNS summary
	 */
	public function edns(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/summary/edns', \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112TimeseriesByEdns::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AS112 DNS queries by IP version summary
	 */
	public function ipVersion(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/summary/ip_version', \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112TimeseriesByIpVersion::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AS112 DNS queries by DNS protocol summary
	 */
	public function protocol(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $queryType = null,
		?array $responseCode = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/summary/protocol', \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112TimeseriesByProtocol::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'queryType' => $queryType ?? null, 'responseCode' => $responseCode ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AS112 DNS queries by type summary
	 */
	public function queryType(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $protocol = null,
		?array $responseCode = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/summary/query_type', \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112TimeseriesByQueryType::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AS112 DNS queries by response code summary
	 */
	public function responseCodes(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $queryType = null,
		?array $protocol = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/summary/response_codes', \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112TimeseriesByResponseCodes::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AS112 summary by dimension
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\RadarAS112Dimension $dimension,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112Summary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AS112 DNS queries time series
	 */
	public function timeseries(
		?\FoundryCo\Cloudflare\Enums\RadarAS112AggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/timeseries', \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112Timeseries::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AS112 DNS queries by DNSSEC support time series
	 */
	public function dnssec(
		?\FoundryCo\Cloudflare\Enums\RadarAS112AggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/timeseries_groups/dnssec', \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112TimeseriesGroupByDnssec::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AS112 DNS queries by EDNS support summary
	 */
	public function radarGetDnsAs112TimeseriesGroupByEdns(
		?\FoundryCo\Cloudflare\Enums\RadarAS112AggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/timeseries_groups/edns', \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112TimeseriesGroupByEdns::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AS112 DNS queries by IP version time series
	 */
	public function radarGetDnsAs112TimeseriesGroupByIpVersion(
		?\FoundryCo\Cloudflare\Enums\RadarAS112AggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/timeseries_groups/ip_version', \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112TimeseriesGroupByIpVersion::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AS112 DNS queries by DNS protocol time series
	 */
	public function radarGetDnsAs112TimeseriesGroupByProtocol(
		?\FoundryCo\Cloudflare\Enums\RadarAS112AggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $queryType = null,
		?array $responseCode = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/timeseries_groups/protocol', \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112TimeseriesGroupByProtocol::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'queryType' => $queryType ?? null, 'responseCode' => $responseCode ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AS112 DNS queries by type time series
	 */
	public function radarGetDnsAs112TimeseriesGroupByQueryType(
		?\FoundryCo\Cloudflare\Enums\RadarAS112AggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $protocol = null,
		?array $responseCode = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/timeseries_groups/query_type', \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112TimeseriesGroupByQueryType::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AS112 DNS queries by response code time series
	 */
	public function radarGetDnsAs112TimeseriesGroupByResponseCodes(
		?\FoundryCo\Cloudflare\Enums\RadarAS112AggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $queryType = null,
		?array $protocol = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/timeseries_groups/response_codes', \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112TimeseriesGroupByResponseCodes::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AS112 time series grouped by dimension
	 */
	public function timeseriesGroups(
		\FoundryCo\Cloudflare\Enums\RadarAS112Dimension $dimension,
		?\FoundryCo\Cloudflare\Enums\RadarAS112AggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/timeseries_groups/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112TimeseriesGroup::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top locations by AS112 DNS queries
	 */
	public function locations(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/top/locations', \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112TopLocations::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top locations by AS112 DNS queries with DNSSEC support
	 */
	public function radarGetDnsAs112TopLocationsByDnssec(
		\FoundryCo\Cloudflare\Enums\RadarAS112Dnssec $dnssec,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/top/locations/dnssec/' . $dnssec, \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112TopLocationsByDnssec::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top locations by AS112 DNS queries with EDNS support
	 */
	public function radarGetDnsAs112TopLocationsByEdns(
		\FoundryCo\Cloudflare\Enums\RadarAS112Edns $edns,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/top/locations/edns/' . $edns, \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112TopLocationsByEdns::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top locations by AS112 DNS queries for an IP version
	 */
	public function radarGetDnsAs112TopLocationsByIpVersion(
		\FoundryCo\Cloudflare\Enums\RadarAS112IpVersion $ipVersion,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?\FoundryCo\Cloudflare\Enums\RadarAS112Format $format = null,
	): mixed
	{
		return $this->client->get('/radar/as112/top/locations/ip_version/' . $ipVersion, \FoundryCo\Cloudflare\Responses\RadarGetDnsAs112TopLocationsByIpVersion::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'format' => $format ?? null]);
	}
}
