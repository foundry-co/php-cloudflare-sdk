<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarEmailRoutingResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get email ARC validation summary
	 */
	public function list(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $ipVersion = null,
		?array $encrypted = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/email/routing/summary/arc', \FoundryCo\Cloudflare\Responses\RadarGetEmailRoutingSummaryByArc::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'ipVersion' => $ipVersion ?? null, 'encrypted' => $encrypted ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email DKIM validation summary
	 */
	public function dkim(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $ipVersion = null,
		?array $encrypted = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/email/routing/summary/dkim', \FoundryCo\Cloudflare\Responses\RadarGetEmailRoutingSummaryByDkim::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'ipVersion' => $ipVersion ?? null, 'encrypted' => $encrypted ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email DMARC validation summary
	 */
	public function dmarc(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $spf = null,
		?array $ipVersion = null,
		?array $encrypted = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/email/routing/summary/dmarc', \FoundryCo\Cloudflare\Responses\RadarGetEmailRoutingSummaryByDmarc::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'spf' => $spf ?? null, 'ipVersion' => $ipVersion ?? null, 'encrypted' => $encrypted ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email encryption status summary
	 */
	public function encrypted(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $ipVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/email/routing/summary/encrypted', \FoundryCo\Cloudflare\Responses\RadarGetEmailRoutingSummaryByEncrypted::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'ipVersion' => $ipVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email IP version summary
	 */
	public function ipVersion(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $encrypted = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/email/routing/summary/ip_version', \FoundryCo\Cloudflare\Responses\RadarGetEmailRoutingSummaryByIpVersion::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'encrypted' => $encrypted ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email SPF validation summary
	 */
	public function spf(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $ipVersion = null,
		?array $encrypted = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/email/routing/summary/spf', \FoundryCo\Cloudflare\Responses\RadarGetEmailRoutingSummaryBySpf::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'ipVersion' => $ipVersion ?? null, 'encrypted' => $encrypted ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email routing summary by dimension
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\RadarEmailRoutingDimension $dimension,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $ipVersion = null,
		?array $encrypted = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/email/routing/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetEmailRoutingSummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'ipVersion' => $ipVersion ?? null, 'encrypted' => $encrypted ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email ARC validation time series
	 */
	public function arc(
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $ipVersion = null,
		?array $encrypted = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/email/routing/timeseries_groups/arc', \FoundryCo\Cloudflare\Responses\RadarGetEmailRoutingTimeseriesGroupByArc::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'ipVersion' => $ipVersion ?? null, 'encrypted' => $encrypted ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email DKIM validation time series
	 */
	public function radarGetEmailRoutingTimeseriesGroupByDkim(
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $ipVersion = null,
		?array $encrypted = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/email/routing/timeseries_groups/dkim', \FoundryCo\Cloudflare\Responses\RadarGetEmailRoutingTimeseriesGroupByDkim::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'ipVersion' => $ipVersion ?? null, 'encrypted' => $encrypted ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email DMARC validation time series
	 */
	public function radarGetEmailRoutingTimeseriesGroupByDmarc(
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $spf = null,
		?array $ipVersion = null,
		?array $encrypted = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/email/routing/timeseries_groups/dmarc', \FoundryCo\Cloudflare\Responses\RadarGetEmailRoutingTimeseriesGroupByDmarc::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'spf' => $spf ?? null, 'ipVersion' => $ipVersion ?? null, 'encrypted' => $encrypted ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email encryption status time series
	 */
	public function radarGetEmailRoutingTimeseriesGroupByEncrypted(
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $ipVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/email/routing/timeseries_groups/encrypted', \FoundryCo\Cloudflare\Responses\RadarGetEmailRoutingTimeseriesGroupByEncrypted::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'ipVersion' => $ipVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email IP version time series
	 */
	public function radarGetEmailRoutingTimeseriesGroupByIpVersion(
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $encrypted = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/email/routing/timeseries_groups/ip_version', \FoundryCo\Cloudflare\Responses\RadarGetEmailRoutingTimeseriesGroupByIpVersion::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'encrypted' => $encrypted ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email SPF validation time series
	 */
	public function radarGetEmailRoutingTimeseriesGroupBySpf(
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $ipVersion = null,
		?array $encrypted = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/email/routing/timeseries_groups/spf', \FoundryCo\Cloudflare\Responses\RadarGetEmailRoutingTimeseriesGroupBySpf::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'ipVersion' => $ipVersion ?? null, 'encrypted' => $encrypted ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email routing time series grouped by dimension
	 */
	public function timeseriesGroups(
		\FoundryCo\Cloudflare\Enums\RadarEmailRoutingDimension $dimension,
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $ipVersion = null,
		?array $encrypted = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailRoutingFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/email/routing/timeseries_groups/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetEmailRoutingTimeseriesGroup::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'ipVersion' => $ipVersion ?? null, 'encrypted' => $encrypted ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}
}
