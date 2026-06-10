<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarHTTPResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get HTTP requests by bot class summary
	 */
	public function list(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/summary/bot_class', \FoundryCo\Cloudflare\Responses\RadarGetHttpSummaryByBotClass::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests by device type summary
	 */
	public function deviceType(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/summary/device_type', \FoundryCo\Cloudflare\Responses\RadarGetHttpSummaryByDeviceType::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests by HTTP/HTTPS summary
	 */
	public function httpProtocol(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/summary/http_protocol', \FoundryCo\Cloudflare\Responses\RadarGetHttpSummaryByHttpProtocol::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests by HTTP version summary
	 */
	public function httpVersion(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/summary/http_version', \FoundryCo\Cloudflare\Responses\RadarGetHttpSummaryByHttpVersion::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests by IP version summary
	 */
	public function ipVersion(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/summary/ip_version', \FoundryCo\Cloudflare\Responses\RadarGetHttpSummaryByIpVersion::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests by OS summary
	 */
	public function os(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/summary/os', \FoundryCo\Cloudflare\Responses\RadarGetHttpSummaryByOperatingSystem::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests by post-quantum support summary
	 */
	public function postQuantum(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/summary/post_quantum', \FoundryCo\Cloudflare\Responses\RadarGetHttpSummaryByPostQuantum::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests by TLS version summary
	 */
	public function tlsVersion(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/summary/tls_version', \FoundryCo\Cloudflare\Responses\RadarGetHttpSummaryByTlsVersion::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests summary by dimension
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\RadarHTTPDimension $dimension,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $apiTraffic = null,
		?array $botClass = null,
		?array $contentType = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetHttpSummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'apiTraffic' => $apiTraffic ?? null, 'botClass' => $botClass ?? null, 'contentType' => $contentType ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests time series
	 */
	public function timeseries(
		?\FoundryCo\Cloudflare\Enums\RadarHTTPAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPNormalization $normalization = null,
		?array $apiTraffic = null,
		?array $botClass = null,
		?array $contentType = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/timeseries', \FoundryCo\Cloudflare\Responses\RadarGetHttpTimeseries::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'normalization' => $normalization ?? null, 'apiTraffic' => $apiTraffic ?? null, 'botClass' => $botClass ?? null, 'contentType' => $contentType ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests by bot class time series
	 */
	public function botClass(
		?\FoundryCo\Cloudflare\Enums\RadarHTTPAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/timeseries_groups/bot_class', \FoundryCo\Cloudflare\Responses\RadarGetHttpTimeseriesGroupByBotClass::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests by user agent time series
	 */
	public function browser(
		?\FoundryCo\Cloudflare\Enums\RadarHTTPAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/timeseries_groups/browser', \FoundryCo\Cloudflare\Responses\RadarGetHttpTimeseriesGroupByBrowsers::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests by user agent family time series
	 */
	public function browserFamily(
		?\FoundryCo\Cloudflare\Enums\RadarHTTPAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/timeseries_groups/browser_family', \FoundryCo\Cloudflare\Responses\RadarGetHttpTimeseriesGroupByBrowserFamilies::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests by device type time series
	 */
	public function radarGetHttpTimeseriesGroupByDeviceType(
		?\FoundryCo\Cloudflare\Enums\RadarHTTPAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/timeseries_groups/device_type', \FoundryCo\Cloudflare\Responses\RadarGetHttpTimeseriesGroupByDeviceType::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests by HTTP/HTTPS time series
	 */
	public function radarGetHttpTimeseriesGroupByHttpProtocol(
		?\FoundryCo\Cloudflare\Enums\RadarHTTPAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/timeseries_groups/http_protocol', \FoundryCo\Cloudflare\Responses\RadarGetHttpTimeseriesGroupByHttpProtocol::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests by HTTP version time series
	 */
	public function radarGetHttpTimeseriesGroupByHttpVersion(
		?\FoundryCo\Cloudflare\Enums\RadarHTTPAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/timeseries_groups/http_version', \FoundryCo\Cloudflare\Responses\RadarGetHttpTimeseriesGroupByHttpVersion::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests by IP version time series
	 */
	public function radarGetHttpTimeseriesGroupByIpVersion(
		?\FoundryCo\Cloudflare\Enums\RadarHTTPAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/timeseries_groups/ip_version', \FoundryCo\Cloudflare\Responses\RadarGetHttpTimeseriesGroupByIpVersion::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests by OS time series
	 */
	public function radarGetHttpTimeseriesGroupByOperatingSystem(
		?\FoundryCo\Cloudflare\Enums\RadarHTTPAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/timeseries_groups/os', \FoundryCo\Cloudflare\Responses\RadarGetHttpTimeseriesGroupByOperatingSystem::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests by post-quantum support time series
	 */
	public function radarGetHttpTimeseriesGroupByPostQuantum(
		?\FoundryCo\Cloudflare\Enums\RadarHTTPAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/timeseries_groups/post_quantum', \FoundryCo\Cloudflare\Responses\RadarGetHttpTimeseriesGroupByPostQuantum::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests by TLS version time series
	 */
	public function radarGetHttpTimeseriesGroupByTlsVersion(
		?\FoundryCo\Cloudflare\Enums\RadarHTTPAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/timeseries_groups/tls_version', \FoundryCo\Cloudflare\Responses\RadarGetHttpTimeseriesGroupByTlsVersion::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP requests time series grouped by dimension
	 */
	public function timeseriesGroups(
		\FoundryCo\Cloudflare\Enums\RadarHTTPDimension $dimension,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $apiTraffic = null,
		?array $botClass = null,
		?array $contentType = null,
		?int $limitPerGroup = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPNormalization $normalization = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/timeseries_groups/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetHttpTimeseriesGroup::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'apiTraffic' => $apiTraffic ?? null, 'botClass' => $botClass ?? null, 'contentType' => $contentType ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'normalization' => $normalization ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top ASes by HTTP requests
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
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/ases', \FoundryCo\Cloudflare\Responses\RadarGetHttpTopAsesByHttpRequests::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top ASes by HTTP requests for a bot class
	 */
	public function radarGetHttpTopAsesByBotClass(
		\FoundryCo\Cloudflare\Enums\RadarHTTPBotClass $botClass,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/ases/bot_class/' . $botClass, \FoundryCo\Cloudflare\Responses\RadarGetHttpTopAsesByBotClass::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top ASes by HTTP requests for a browser family
	 */
	public function radarGetHttpTopAsesByBrowserFamily(
		\FoundryCo\Cloudflare\Enums\RadarHTTPBrowserFamily $browserFamily,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/ases/browser_family/' . $browserFamily, \FoundryCo\Cloudflare\Responses\RadarGetHttpTopAsesByBrowserFamily::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top ASes by HTTP requests for a device type
	 */
	public function radarGetHttpTopAsesByDeviceType(
		\FoundryCo\Cloudflare\Enums\RadarHTTPDeviceType $deviceType,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/ases/device_type/' . $deviceType, \FoundryCo\Cloudflare\Responses\RadarGetHttpTopAsesByDeviceType::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top ASes by HTTP requests for an HTTP protocol
	 */
	public function radarGetHttpTopAsesByHttpProtocol(
		\FoundryCo\Cloudflare\Enums\RadarHTTPHttpProtocol $httpProtocol,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/ases/http_protocol/' . $httpProtocol, \FoundryCo\Cloudflare\Responses\RadarGetHttpTopAsesByHttpProtocol::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top ASes by HTTP requests for an HTTP version
	 */
	public function radarGetHttpTopAsesByHttpVersion(
		\FoundryCo\Cloudflare\Enums\RadarHTTPHttpVersion $httpVersion,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/ases/http_version/' . $httpVersion, \FoundryCo\Cloudflare\Responses\RadarGetHttpTopAsesByHttpVersion::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top ASes by HTTP requests for an IP version
	 */
	public function radarGetHttpTopAsesByIpVersion(
		\FoundryCo\Cloudflare\Enums\RadarHTTPIpVersion $ipVersion,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/ases/ip_version/' . $ipVersion, \FoundryCo\Cloudflare\Responses\RadarGetHttpTopAsesByIpVersion::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top ASes by HTTP requests for an OS
	 */
	public function radarGetHttpTopAsesByOperatingSystem(
		\FoundryCo\Cloudflare\Enums\RadarHTTPOs $os,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/ases/os/' . $os, \FoundryCo\Cloudflare\Responses\RadarGetHttpTopAsesByOperatingSystem::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top ASes by HTTP requests for a TLS version
	 */
	public function radarGetHttpTopAsesByTlsVersion(
		\FoundryCo\Cloudflare\Enums\RadarHTTPTlsVersion $tlsVersion,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/ases/tls_version/' . $tlsVersion, \FoundryCo\Cloudflare\Responses\RadarGetHttpTopAsesByTlsVersion::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top user agents by HTTP requests
	 */
	public function radarGetHttpTopBrowsers(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/browser', \FoundryCo\Cloudflare\Responses\RadarGetHttpTopBrowsers::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top user agent families by HTTP requests
	 */
	public function radarGetHttpTopBrowserFamilies(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/browser_family', \FoundryCo\Cloudflare\Responses\RadarGetHttpTopBrowserFamilies::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top locations by HTTP requests
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
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/locations', \FoundryCo\Cloudflare\Responses\RadarGetHttpTopLocationsByHttpRequests::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top locations by HTTP requests for a bot class
	 */
	public function radarGetHttpTopLocationsByBotClass(
		\FoundryCo\Cloudflare\Enums\RadarHTTPBotClass $botClass,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/locations/bot_class/' . $botClass, \FoundryCo\Cloudflare\Responses\RadarGetHttpTopLocationsByBotClass::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top locations by HTTP requests for a browser family
	 */
	public function radarGetHttpTopLocationsByBrowserFamily(
		\FoundryCo\Cloudflare\Enums\RadarHTTPBrowserFamily $browserFamily,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/locations/browser_family/' . $browserFamily, \FoundryCo\Cloudflare\Responses\RadarGetHttpTopLocationsByBrowserFamily::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top locations by HTTP requests for a device type
	 */
	public function radarGetHttpTopLocationsByDeviceType(
		\FoundryCo\Cloudflare\Enums\RadarHTTPDeviceType $deviceType,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/locations/device_type/' . $deviceType, \FoundryCo\Cloudflare\Responses\RadarGetHttpTopLocationsByDeviceType::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top locations by HTTP requests for an HTTP protocol
	 */
	public function radarGetHttpTopLocationsByHttpProtocol(
		\FoundryCo\Cloudflare\Enums\RadarHTTPHttpProtocol $httpProtocol,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/locations/http_protocol/' . $httpProtocol, \FoundryCo\Cloudflare\Responses\RadarGetHttpTopLocationsByHttpProtocol::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top locations by HTTP requests for an HTTP version
	 */
	public function radarGetHttpTopLocationsByHttpVersion(
		\FoundryCo\Cloudflare\Enums\RadarHTTPHttpVersion $httpVersion,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/locations/http_version/' . $httpVersion, \FoundryCo\Cloudflare\Responses\RadarGetHttpTopLocationsByHttpVersion::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top locations by HTTP requests for an IP version
	 */
	public function radarGetHttpTopLocationsByIpVersion(
		\FoundryCo\Cloudflare\Enums\RadarHTTPIpVersion $ipVersion,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $os = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/locations/ip_version/' . $ipVersion, \FoundryCo\Cloudflare\Responses\RadarGetHttpTopLocationsByIpVersion::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'os' => $os ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top locations by HTTP requests for an OS
	 */
	public function radarGetHttpTopLocationsByOperatingSystem(
		\FoundryCo\Cloudflare\Enums\RadarHTTPOs $os,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $tlsVersion = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/locations/os/' . $os, \FoundryCo\Cloudflare\Responses\RadarGetHttpTopLocationsByOperatingSystem::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'tlsVersion' => $tlsVersion ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top locations by HTTP requests for a TLS version
	 */
	public function radarGetHttpTopLocationsByTlsVersion(
		\FoundryCo\Cloudflare\Enums\RadarHTTPTlsVersion $tlsVersion,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $botClass = null,
		?array $deviceType = null,
		?array $httpProtocol = null,
		?array $httpVersion = null,
		?array $ipVersion = null,
		?array $os = null,
		?array $browserFamily = null,
		?\FoundryCo\Cloudflare\Enums\RadarHTTPFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/http/top/locations/tls_version/' . $tlsVersion, \FoundryCo\Cloudflare\Responses\RadarGetHttpTopLocationsByTlsVersion::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'botClass' => $botClass ?? null, 'deviceType' => $deviceType ?? null, 'httpProtocol' => $httpProtocol ?? null, 'httpVersion' => $httpVersion ?? null, 'ipVersion' => $ipVersion ?? null, 'os' => $os ?? null, 'browserFamily' => $browserFamily ?? null, 'format' => $format ?? null]);
	}
}
