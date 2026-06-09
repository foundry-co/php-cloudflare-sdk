<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarBGPResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get BGP hijack events
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?int $eventId = null,
		?int $hijackerAsn = null,
		?int $victimAsn = null,
		?int $involvedAsn = null,
		?string $involvedCountry = null,
		?string $prefix = null,
		?int $minConfidence = null,
		?int $maxConfidence = null,
		?string $dateRange = null,
		?\DateTimeImmutable $dateStart = null,
		?\DateTimeImmutable $dateEnd = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPSortBy $sortBy = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPSortOrder $sortOrder = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBGPEvents
	{
		return $this->client->get('/radar/bgp/hijacks/events', \FoundryCo\Cloudflare\Responses\RadarBGPEvents::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'eventId' => $eventId ?? null, 'hijackerAsn' => $hijackerAsn ?? null, 'victimAsn' => $victimAsn ?? null, 'involvedAsn' => $involvedAsn ?? null, 'involvedCountry' => $involvedCountry ?? null, 'prefix' => $prefix ?? null, 'minConfidence' => $minConfidence ?? null, 'maxConfidence' => $maxConfidence ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'sortBy' => $sortBy ?? null, 'sortOrder' => $sortOrder ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get announced IP address space time series
	 */
	public function timeseries(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $ipVersion = null,
		?bool $includeDelay = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBGPTimeseries
	{
		return $this->client->get('/radar/bgp/ips/timeseries', \FoundryCo\Cloudflare\Responses\RadarBGPTimeseries::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'ipVersion' => $ipVersion ?? null, 'includeDelay' => $includeDelay ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top ASes by announced IP space
	 */
	public function ases(
		?\DateTimeImmutable $date = null,
		?int $limit = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPMetric $metric = null,
		?string $country = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBGPAses
	{
		return $this->client->get('/radar/bgp/ips/top/ases', \FoundryCo\Cloudflare\Responses\RadarBGPAses::class, ['date' => $date ?? null, 'limit' => $limit ?? null, 'metric' => $metric ?? null, 'country' => $country ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get BGP route leak events
	 */
	public function events(
		?int $page = null,
		?int $perPage = null,
		?int $eventId = null,
		?int $leakAsn = null,
		?int $involvedAsn = null,
		?string $involvedCountry = null,
		?string $dateRange = null,
		?\DateTimeImmutable $dateStart = null,
		?\DateTimeImmutable $dateEnd = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPSortBy $sortBy = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPSortOrder $sortOrder = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBGPEvents
	{
		return $this->client->get('/radar/bgp/leaks/events', \FoundryCo\Cloudflare\Responses\RadarBGPEvents::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'eventId' => $eventId ?? null, 'leakAsn' => $leakAsn ?? null, 'involvedAsn' => $involvedAsn ?? null, 'involvedCountry' => $involvedCountry ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'sortBy' => $sortBy ?? null, 'sortOrder' => $sortOrder ?? null, 'format' => $format ?? null]);
	}


	/**
	 * List ASes from global routing tables
	 */
	public function radarGetBgpRoutesAsns(
		?string $location = null,
		?int $limit = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPSortBy $sortBy = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPSortOrder $sortOrder = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBGPAsns
	{
		return $this->client->get('/radar/bgp/routes/ases', \FoundryCo\Cloudflare\Responses\RadarBGPAsns::class, ['location' => $location ?? null, 'limit' => $limit ?? null, 'sortBy' => $sortBy ?? null, 'sortOrder' => $sortOrder ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get Multi-Origin AS (MOAS) prefixes
	 */
	public function moas(
		?int $origin = null,
		?string $prefix = null,
		?bool $invalidOnly = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBGPMoas
	{
		return $this->client->get('/radar/bgp/routes/moas', \FoundryCo\Cloudflare\Responses\RadarBGPMoas::class, ['origin' => $origin ?? null, 'prefix' => $prefix ?? null, 'invalidOnly' => $invalidOnly ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get prefix-to-ASN mapping
	 */
	public function pfx2as(
		?string $prefix = null,
		?int $origin = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPRpkiStatus $rpkiStatus = null,
		?bool $longestPrefixMatch = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBGPPfx2as
	{
		return $this->client->get('/radar/bgp/routes/pfx2as', \FoundryCo\Cloudflare\Responses\RadarBGPPfx2as::class, ['prefix' => $prefix ?? null, 'origin' => $origin ?? null, 'rpkiStatus' => $rpkiStatus ?? null, 'longestPrefixMatch' => $longestPrefixMatch ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get real-time BGP routes for a prefix
	 */
	public function realtime(
		?string $prefix = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBGPRealtime
	{
		return $this->client->get('/radar/bgp/routes/realtime', \FoundryCo\Cloudflare\Responses\RadarBGPRealtime::class, ['prefix' => $prefix ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get BGP routing table stats
	 */
	public function stats(
		?int $asn = null,
		?string $location = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBGPStats
	{
		return $this->client->get('/radar/bgp/routes/stats', \FoundryCo\Cloudflare\Responses\RadarBGPStats::class, ['asn' => $asn ?? null, 'location' => $location ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get ASPA changes over time
	 */
	public function changes(
		?\DateTimeImmutable $dateStart = null,
		?\DateTimeImmutable $dateEnd = null,
		?int $asn = null,
		?bool $includeAsnInfo = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBGPChanges
	{
		return $this->client->get('/radar/bgp/rpki/aspa/changes', \FoundryCo\Cloudflare\Responses\RadarBGPChanges::class, ['dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'includeAsnInfo' => $includeAsnInfo ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get ASPA objects snapshot
	 */
	public function snapshot(
		?int $customerAsn = null,
		?int $providerAsn = null,
		?\DateTimeImmutable $date = null,
		?bool $includeAsnInfo = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBGPSnapshot
	{
		return $this->client->get('/radar/bgp/rpki/aspa/snapshot', \FoundryCo\Cloudflare\Responses\RadarBGPSnapshot::class, ['customerAsn' => $customerAsn ?? null, 'providerAsn' => $providerAsn ?? null, 'date' => $date ?? null, 'includeAsnInfo' => $includeAsnInfo ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get ASPA count time series
	 */
	public function radarGetBgpRpkiAspaTimeseries(
		?\DateTimeImmutable $dateStart = null,
		?\DateTimeImmutable $dateEnd = null,
		?array $name = null,
		?array $rir = null,
		?array $location = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBGPTimeseries
	{
		return $this->client->get('/radar/bgp/rpki/aspa/timeseries', \FoundryCo\Cloudflare\Responses\RadarBGPTimeseries::class, ['dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'name' => $name ?? null, 'rir' => $rir ?? null, 'location' => $location ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get RPKI ROA deployment time series
	 */
	public function radarGetBgpRpkiRoasTimeseries(
		?\DateTimeImmutable $dateStart = null,
		?\DateTimeImmutable $dateEnd = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPMetric $metric = null,
		?array $asn = null,
		?array $location = null,
		?array $name = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBGPTimeseries
	{
		return $this->client->get('/radar/bgp/rpki/roas/timeseries', \FoundryCo\Cloudflare\Responses\RadarBGPTimeseries::class, ['dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'metric' => $metric ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'name' => $name ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get BGP time series
	 */
	public function radarGetBgpTimeseries(
		?\FoundryCo\Cloudflare\Enums\RadarBGPAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $prefix = null,
		?array $updateType = null,
		?array $asn = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBGPTimeseries
	{
		return $this->client->get('/radar/bgp/timeseries', \FoundryCo\Cloudflare\Responses\RadarBGPTimeseries::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'prefix' => $prefix ?? null, 'updateType' => $updateType ?? null, 'asn' => $asn ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top ASes by BGP updates
	 */
	public function radarGetBgpTopAses(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $prefix = null,
		?array $updateType = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBGPAses
	{
		return $this->client->get('/radar/bgp/top/ases', \FoundryCo\Cloudflare\Responses\RadarBGPAses::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'prefix' => $prefix ?? null, 'updateType' => $updateType ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top ASes by prefix count
	 */
	public function prefixes(
		?string $country = null,
		?int $limit = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBGPPrefixes
	{
		return $this->client->get('/radar/bgp/top/ases/prefixes', \FoundryCo\Cloudflare\Responses\RadarBGPPrefixes::class, ['country' => $country ?? null, 'limit' => $limit ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top prefixes by BGP updates
	 */
	public function radarGetBgpTopPrefixes(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $updateType = null,
		?\FoundryCo\Cloudflare\Enums\RadarBGPFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBGPPrefixes
	{
		return $this->client->get('/radar/bgp/top/prefixes', \FoundryCo\Cloudflare\Responses\RadarBGPPrefixes::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'updateType' => $updateType ?? null, 'format' => $format ?? null]);
	}
}
