<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSStatus
	{
		return $this->client->get('/radar/dns/summary/cache_hit', \FoundryCo\Cloudflare\Responses\RadarDNSStatus::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSDnssec
	{
		return $this->client->get('/radar/dns/summary/dnssec', \FoundryCo\Cloudflare\Responses\RadarDNSDnssec::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSAwareness
	{
		return $this->client->get('/radar/dns/summary/dnssec_aware', \FoundryCo\Cloudflare\Responses\RadarDNSAwareness::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSVersion
	{
		return $this->client->get('/radar/dns/summary/dnssec_e2e', \FoundryCo\Cloudflare\Responses\RadarDNSVersion::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSVersion
	{
		return $this->client->get('/radar/dns/summary/ip_version', \FoundryCo\Cloudflare\Responses\RadarDNSVersion::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSStatus
	{
		return $this->client->get('/radar/dns/summary/matching_answer', \FoundryCo\Cloudflare\Responses\RadarDNSStatus::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSProtocol
	{
		return $this->client->get('/radar/dns/summary/protocol', \FoundryCo\Cloudflare\Responses\RadarDNSProtocol::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSType
	{
		return $this->client->get('/radar/dns/summary/query_type', \FoundryCo\Cloudflare\Responses\RadarDNSType::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSCode
	{
		return $this->client->get('/radar/dns/summary/response_code', \FoundryCo\Cloudflare\Responses\RadarDNSCode::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'nodata' => $nodata ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSTtl
	{
		return $this->client->get('/radar/dns/summary/response_ttl', \FoundryCo\Cloudflare\Responses\RadarDNSTtl::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSSummary
	{
		return $this->client->get('/radar/dns/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarDNSSummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'cacheHit' => $cacheHit ?? null, 'nodata' => $nodata ?? null, 'protocol' => $protocol ?? null, 'queryType' => $queryType ?? null, 'responseCode' => $responseCode ?? null, 'responseTtl' => $responseTtl ?? null, 'dnssec' => $dnssec ?? null, 'dnssecAware' => $dnssecAware ?? null, 'dnssecE2e' => $dnssecE2e ?? null, 'ipVersion' => $ipVersion ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'matchingAnswer' => $matchingAnswer ?? null, 'tld' => $tld ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSTimeseries
	{
		return $this->client->get('/radar/dns/timeseries', \FoundryCo\Cloudflare\Responses\RadarDNSTimeseries::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'cacheHit' => $cacheHit ?? null, 'nodata' => $nodata ?? null, 'protocol' => $protocol ?? null, 'queryType' => $queryType ?? null, 'responseCode' => $responseCode ?? null, 'responseTtl' => $responseTtl ?? null, 'dnssec' => $dnssec ?? null, 'dnssecAware' => $dnssecAware ?? null, 'dnssecE2e' => $dnssecE2e ?? null, 'ipVersion' => $ipVersion ?? null, 'matchingAnswer' => $matchingAnswer ?? null, 'tld' => $tld ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSStatus
	{
		return $this->client->get('/radar/dns/timeseries_groups/cache_hit', \FoundryCo\Cloudflare\Responses\RadarDNSStatus::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSDnssec
	{
		return $this->client->get('/radar/dns/timeseries_groups/dnssec', \FoundryCo\Cloudflare\Responses\RadarDNSDnssec::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSAwareness
	{
		return $this->client->get('/radar/dns/timeseries_groups/dnssec_aware', \FoundryCo\Cloudflare\Responses\RadarDNSAwareness::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSVersion
	{
		return $this->client->get('/radar/dns/timeseries_groups/dnssec_e2e', \FoundryCo\Cloudflare\Responses\RadarDNSVersion::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSVersion
	{
		return $this->client->get('/radar/dns/timeseries_groups/ip_version', \FoundryCo\Cloudflare\Responses\RadarDNSVersion::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSStatus
	{
		return $this->client->get('/radar/dns/timeseries_groups/matching_answer', \FoundryCo\Cloudflare\Responses\RadarDNSStatus::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSProtocol
	{
		return $this->client->get('/radar/dns/timeseries_groups/protocol', \FoundryCo\Cloudflare\Responses\RadarDNSProtocol::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSType
	{
		return $this->client->get('/radar/dns/timeseries_groups/query_type', \FoundryCo\Cloudflare\Responses\RadarDNSType::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSCode
	{
		return $this->client->get('/radar/dns/timeseries_groups/response_code', \FoundryCo\Cloudflare\Responses\RadarDNSCode::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'nodata' => $nodata ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSTtl
	{
		return $this->client->get('/radar/dns/timeseries_groups/response_ttl', \FoundryCo\Cloudflare\Responses\RadarDNSTtl::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'queryType' => $queryType ?? null, 'protocol' => $protocol ?? null, 'responseCode' => $responseCode ?? null, 'nodata' => $nodata ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSGroup
	{
		return $this->client->get('/radar/dns/timeseries_groups/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarDNSGroup::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'cacheHit' => $cacheHit ?? null, 'nodata' => $nodata ?? null, 'protocol' => $protocol ?? null, 'queryType' => $queryType ?? null, 'responseCode' => $responseCode ?? null, 'responseTtl' => $responseTtl ?? null, 'dnssec' => $dnssec ?? null, 'dnssecAware' => $dnssecAware ?? null, 'dnssecE2e' => $dnssecE2e ?? null, 'ipVersion' => $ipVersion ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'matchingAnswer' => $matchingAnswer ?? null, 'tld' => $tld ?? null, 'normalization' => $normalization ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSAses
	{
		return $this->client->get('/radar/dns/top/ases', \FoundryCo\Cloudflare\Responses\RadarDNSAses::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'domain' => $domain ?? null, 'cacheHit' => $cacheHit ?? null, 'nodata' => $nodata ?? null, 'protocol' => $protocol ?? null, 'queryType' => $queryType ?? null, 'responseCode' => $responseCode ?? null, 'responseTtl' => $responseTtl ?? null, 'dnssec' => $dnssec ?? null, 'dnssecAware' => $dnssecAware ?? null, 'dnssecE2e' => $dnssecE2e ?? null, 'ipVersion' => $ipVersion ?? null, 'matchingAnswer' => $matchingAnswer ?? null, 'format' => $format ?? null]);
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
	): \FoundryCo\Cloudflare\Responses\RadarDNSLocations
	{
		return $this->client->get('/radar/dns/top/locations', \FoundryCo\Cloudflare\Responses\RadarDNSLocations::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'domain' => $domain ?? null, 'cacheHit' => $cacheHit ?? null, 'nodata' => $nodata ?? null, 'protocol' => $protocol ?? null, 'queryType' => $queryType ?? null, 'responseCode' => $responseCode ?? null, 'responseTtl' => $responseTtl ?? null, 'dnssec' => $dnssec ?? null, 'dnssecAware' => $dnssecAware ?? null, 'dnssecE2e' => $dnssecE2e ?? null, 'ipVersion' => $ipVersion ?? null, 'matchingAnswer' => $matchingAnswer ?? null, 'tld' => $tld ?? null, 'format' => $format ?? null]);
	}
}
