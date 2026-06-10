<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarDNSResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get DNS queries by cache status summary
	 */
	public function list(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?array $nodata = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/summary/cache_hit', \FoundryCo\Cloudflare\Responses\RadarGetDnsSummaryByCacheHitStatus::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by DNSSEC support summary
	 */
	public function dnssec(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?array $nodata = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/summary/dnssec', \FoundryCo\Cloudflare\Responses\RadarGetDnsSummaryByDnssec::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by DNSSEC awareness summary
	 */
	public function dnssecAware(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?array $nodata = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/summary/dnssec_aware', \FoundryCo\Cloudflare\Responses\RadarGetDnsSummaryByDnssecAwareness::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by DNSSEC end-to-end summary
	 */
	public function dnssecE2e(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?array $nodata = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/summary/dnssec_e2e', \FoundryCo\Cloudflare\Responses\RadarGetDnsSummaryByDnssecE2eVersion::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by IP version summary
	 */
	public function ipVersion(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?array $nodata = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/summary/ip_version', \FoundryCo\Cloudflare\Responses\RadarGetDnsSummaryByIpVersion::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by matching answer summary
	 */
	public function matchingAnswer(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?array $nodata = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/summary/matching_answer', \FoundryCo\Cloudflare\Responses\RadarGetDnsSummaryByMatchingAnswerStatus::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by protocol summary
	 */
	public function protocol(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $queryType = null,
		?array $responseCode = null,
		?array $nodata = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/summary/protocol', \FoundryCo\Cloudflare\Responses\RadarGetDnsSummaryByProtocol::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by type summary
	 */
	public function queryType(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $protocol = null,
		?array $responseCode = null,
		?array $nodata = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/summary/query_type', \FoundryCo\Cloudflare\Responses\RadarGetDnsSummaryByQueryType::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by response code summary
	 */
	public function responseCode(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $nodata = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/summary/response_code', \FoundryCo\Cloudflare\Responses\RadarGetDnsSummaryByResponseCode::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'nodata' => $nodata ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by response TTL summary
	 */
	public function responseTtl(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?array $nodata = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/summary/response_ttl', \FoundryCo\Cloudflare\Responses\RadarGetDnsSummaryByResponseTtl::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS summary by dimension
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\RadarDNSDimension $dimension,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $cacheHit = null,
		?array $nodata = null,
		?array $protocol = null,
		?array $queryType = null,
		?array $responseCode = null,
		?array $responseTtl = null,
		?array $dnssec = null,
		?array $dnssecAware = null,
		?array $dnssecE2e = null,
		?array $ipVersion = null,
		?int $limitPerGroup = null,
		?array $matchingAnswer = null,
		?array $tld = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetDnsSummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'cacheHit' => $cacheHit ?? null, 'nodata' => $nodata ?? null, 'protocol' => $protocol ?? null, 'queryType' => $queryType ?? null, 'responseCode' => $responseCode ?? null, 'responseTtl' => $responseTtl ?? null, 'dnssec' => $dnssec ?? null, 'dnssecAware' => $dnssecAware ?? null, 'dnssecE2e' => $dnssecE2e ?? null, 'ipVersion' => $ipVersion ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'matchingAnswer' => $matchingAnswer ?? null, 'tld' => $tld ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries time series
	 */
	public function timeseries(
		?\FoundryCo\Cloudflare\Enums\RadarDNSAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $cacheHit = null,
		?array $nodata = null,
		?array $protocol = null,
		?array $queryType = null,
		?array $responseCode = null,
		?array $responseTtl = null,
		?array $dnssec = null,
		?array $dnssecAware = null,
		?array $dnssecE2e = null,
		?array $ipVersion = null,
		?array $matchingAnswer = null,
		?array $tld = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/timeseries', \FoundryCo\Cloudflare\Responses\RadarGetDnsTimeseries::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'cacheHit' => $cacheHit ?? null, 'nodata' => $nodata ?? null, 'protocol' => $protocol ?? null, 'queryType' => $queryType ?? null, 'responseCode' => $responseCode ?? null, 'responseTtl' => $responseTtl ?? null, 'dnssec' => $dnssec ?? null, 'dnssecAware' => $dnssecAware ?? null, 'dnssecE2e' => $dnssecE2e ?? null, 'ipVersion' => $ipVersion ?? null, 'matchingAnswer' => $matchingAnswer ?? null, 'tld' => $tld ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by cache status time series
	 */
	public function cacheHit(
		?\FoundryCo\Cloudflare\Enums\RadarDNSAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?array $nodata = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/timeseries_groups/cache_hit', \FoundryCo\Cloudflare\Responses\RadarGetDnsTimeseriesGroupByCacheHitStatus::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by DNSSEC support time series
	 */
	public function radarGetDnsTimeseriesGroupByDnssec(
		?\FoundryCo\Cloudflare\Enums\RadarDNSAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?array $nodata = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/timeseries_groups/dnssec', \FoundryCo\Cloudflare\Responses\RadarGetDnsTimeseriesGroupByDnssec::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by DNSSEC awareness time series
	 */
	public function radarGetDnsTimeseriesGroupByDnssecAwareness(
		?\FoundryCo\Cloudflare\Enums\RadarDNSAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?array $nodata = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/timeseries_groups/dnssec_aware', \FoundryCo\Cloudflare\Responses\RadarGetDnsTimeseriesGroupByDnssecAwareness::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by DNSSEC end-to-end time series
	 */
	public function radarGetDnsTimeseriesGroupByDnssecE2eVersion(
		?\FoundryCo\Cloudflare\Enums\RadarDNSAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?array $nodata = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/timeseries_groups/dnssec_e2e', \FoundryCo\Cloudflare\Responses\RadarGetDnsTimeseriesGroupByDnssecE2eVersion::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by IP version time series
	 */
	public function radarGetDnsTimeseriesGroupByIpVersion(
		?\FoundryCo\Cloudflare\Enums\RadarDNSAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?array $nodata = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/timeseries_groups/ip_version', \FoundryCo\Cloudflare\Responses\RadarGetDnsTimeseriesGroupByIpVersion::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by matching answer time series
	 */
	public function radarGetDnsTimeseriesGroupByMatchingAnswerStatus(
		?\FoundryCo\Cloudflare\Enums\RadarDNSAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?array $nodata = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/timeseries_groups/matching_answer', \FoundryCo\Cloudflare\Responses\RadarGetDnsTimeseriesGroupByMatchingAnswerStatus::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by protocol time series
	 */
	public function radarGetDnsTimeseriesGroupByProtocol(
		?\FoundryCo\Cloudflare\Enums\RadarDNSAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $queryType = null,
		?array $responseCode = null,
		?array $nodata = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/timeseries_groups/protocol', \FoundryCo\Cloudflare\Responses\RadarGetDnsTimeseriesGroupByProtocol::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by type time series
	 */
	public function radarGetDnsTimeseriesGroupByQueryType(
		?\FoundryCo\Cloudflare\Enums\RadarDNSAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $protocol = null,
		?array $responseCode = null,
		?array $nodata = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/timeseries_groups/query_type', \FoundryCo\Cloudflare\Responses\RadarGetDnsTimeseriesGroupByQueryType::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by response code time series
	 */
	public function radarGetDnsTimeseriesGroupByResponseCode(
		?\FoundryCo\Cloudflare\Enums\RadarDNSAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $nodata = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/timeseries_groups/response_code', \FoundryCo\Cloudflare\Responses\RadarGetDnsTimeseriesGroupByResponseCode::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'nodata' => $nodata ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS queries by response TTL time series
	 */
	public function radarGetDnsTimeseriesGroupByResponseTtl(
		?\FoundryCo\Cloudflare\Enums\RadarDNSAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?array $queryType = null,
		?array $protocol = null,
		?array $responseCode = null,
		?array $nodata = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/timeseries_groups/response_ttl', \FoundryCo\Cloudflare\Responses\RadarGetDnsTimeseriesGroupByResponseTtl::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get DNS time series grouped by dimension
	 */
	public function timeseriesGroups(
		\FoundryCo\Cloudflare\Enums\RadarDNSDimension $dimension,
		?\FoundryCo\Cloudflare\Enums\RadarDNSAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $cacheHit = null,
		?array $nodata = null,
		?array $protocol = null,
		?array $queryType = null,
		?array $responseCode = null,
		?array $responseTtl = null,
		?array $dnssec = null,
		?array $dnssecAware = null,
		?array $dnssecE2e = null,
		?array $ipVersion = null,
		?int $limitPerGroup = null,
		?array $matchingAnswer = null,
		?array $tld = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/timeseries_groups/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetDnsTimeseriesGroup::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'cacheHit' => $cacheHit ?? null, 'nodata' => $nodata ?? null, 'protocol' => $protocol ?? null, 'queryType' => $queryType ?? null, 'responseCode' => $responseCode ?? null, 'responseTtl' => $responseTtl ?? null, 'dnssec' => $dnssec ?? null, 'dnssecAware' => $dnssecAware ?? null, 'dnssecE2e' => $dnssecE2e ?? null, 'ipVersion' => $ipVersion ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'matchingAnswer' => $matchingAnswer ?? null, 'tld' => $tld ?? null, 'normalization' => $normalization ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top ASes by DNS queries
	 */
	public function ases(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $domain = null,
		?array $cacheHit = null,
		?array $nodata = null,
		?array $protocol = null,
		?array $queryType = null,
		?array $responseCode = null,
		?array $responseTtl = null,
		?array $dnssec = null,
		?array $dnssecAware = null,
		?array $dnssecE2e = null,
		?array $ipVersion = null,
		?array $matchingAnswer = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/top/ases', \FoundryCo\Cloudflare\Responses\RadarGetDnsTopAses::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'domain' => $domain ?? null, 'cacheHit' => $cacheHit ?? null, 'nodata' => $nodata ?? null, 'protocol' => $protocol ?? null, 'queryType' => $queryType ?? null, 'responseCode' => $responseCode ?? null, 'responseTtl' => $responseTtl ?? null, 'dnssec' => $dnssec ?? null, 'dnssecAware' => $dnssecAware ?? null, 'dnssecE2e' => $dnssecE2e ?? null, 'ipVersion' => $ipVersion ?? null, 'matchingAnswer' => $matchingAnswer ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top locations by DNS queries
	 */
	public function locations(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $domain = null,
		?array $cacheHit = null,
		?array $nodata = null,
		?array $protocol = null,
		?array $queryType = null,
		?array $responseCode = null,
		?array $responseTtl = null,
		?array $dnssec = null,
		?array $dnssecAware = null,
		?array $dnssecE2e = null,
		?array $ipVersion = null,
		?array $matchingAnswer = null,
		?array $tld = null,
		?\FoundryCo\Cloudflare\Enums\RadarDNSFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/dns/top/locations', \FoundryCo\Cloudflare\Responses\RadarGetDnsTopLocations::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'domain' => $domain ?? null, 'cacheHit' => $cacheHit ?? null, 'nodata' => $nodata ?? null, 'protocol' => $protocol ?? null, 'queryType' => $queryType ?? null, 'responseCode' => $responseCode ?? null, 'responseTtl' => $responseTtl ?? null, 'dnssec' => $dnssec ?? null, 'dnssecAware' => $dnssecAware ?? null, 'dnssecE2e' => $dnssecE2e ?? null, 'ipVersion' => $ipVersion ?? null, 'matchingAnswer' => $matchingAnswer ?? null, 'tld' => $tld ?? null, 'format' => $format ?? null]);
	}
}
