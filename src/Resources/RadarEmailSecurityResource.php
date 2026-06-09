<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarEmailSecurityResource
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
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecurityArc
	{
		return $this->client->get('/radar/email/security/summary/arc', \FoundryCo\Cloudflare\Responses\RadarEmailSecurityArc::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
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
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecurityDkim
	{
		return $this->client->get('/radar/email/security/summary/dkim', \FoundryCo\Cloudflare\Responses\RadarEmailSecurityDkim::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
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
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecurityDmarc
	{
		return $this->client->get('/radar/email/security/summary/dmarc', \FoundryCo\Cloudflare\Responses\RadarEmailSecurityDmarc::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email malicious classification summary
	 */
	public function malicious(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecurityMalicious
	{
		return $this->client->get('/radar/email/security/summary/malicious', \FoundryCo\Cloudflare\Responses\RadarEmailSecurityMalicious::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email spam classification summary
	 */
	public function spam(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecuritySpam
	{
		return $this->client->get('/radar/email/security/summary/spam', \FoundryCo\Cloudflare\Responses\RadarEmailSecuritySpam::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
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
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecuritySpf
	{
		return $this->client->get('/radar/email/security/summary/spf', \FoundryCo\Cloudflare\Responses\RadarEmailSecuritySpf::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email spoof classification summary
	 */
	public function spoof(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecuritySpoof
	{
		return $this->client->get('/radar/email/security/summary/spoof', \FoundryCo\Cloudflare\Responses\RadarEmailSecuritySpoof::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email threat category summary
	 */
	public function threatCategory(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecurityCategory
	{
		return $this->client->get('/radar/email/security/summary/threat_category', \FoundryCo\Cloudflare\Responses\RadarEmailSecurityCategory::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email TLS version summary
	 */
	public function tlsVersion(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecurityVersion
	{
		return $this->client->get('/radar/email/security/summary/tls_version', \FoundryCo\Cloudflare\Responses\RadarEmailSecurityVersion::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email security summary by dimension
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\RadarEmailSecurityDimension $dimension,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $tlsVersion = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecuritySummary
	{
		return $this->client->get('/radar/email/security/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarEmailSecuritySummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email ARC validation time series
	 */
	public function arc(
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecurityArc
	{
		return $this->client->get('/radar/email/security/timeseries_groups/arc', \FoundryCo\Cloudflare\Responses\RadarEmailSecurityArc::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email DKIM validation time series
	 */
	public function radarGetEmailSecurityTimeseriesGroupByDkim(
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecurityDkim
	{
		return $this->client->get('/radar/email/security/timeseries_groups/dkim', \FoundryCo\Cloudflare\Responses\RadarEmailSecurityDkim::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email DMARC validation time series
	 */
	public function radarGetEmailSecurityTimeseriesGroupByDmarc(
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $spf = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecurityDmarc
	{
		return $this->client->get('/radar/email/security/timeseries_groups/dmarc', \FoundryCo\Cloudflare\Responses\RadarEmailSecurityDmarc::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email malicious classification time series
	 */
	public function radarGetEmailSecurityTimeseriesGroupByMalicious(
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecurityMalicious
	{
		return $this->client->get('/radar/email/security/timeseries_groups/malicious', \FoundryCo\Cloudflare\Responses\RadarEmailSecurityMalicious::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email spam classification time series
	 */
	public function radarGetEmailSecurityTimeseriesGroupBySpam(
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecuritySpam
	{
		return $this->client->get('/radar/email/security/timeseries_groups/spam', \FoundryCo\Cloudflare\Responses\RadarEmailSecuritySpam::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email SPF validation time series
	 */
	public function radarGetEmailSecurityTimeseriesGroupBySpf(
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecuritySpf
	{
		return $this->client->get('/radar/email/security/timeseries_groups/spf', \FoundryCo\Cloudflare\Responses\RadarEmailSecuritySpf::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email spoof classification time series
	 */
	public function radarGetEmailSecurityTimeseriesGroupBySpoof(
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecuritySpoof
	{
		return $this->client->get('/radar/email/security/timeseries_groups/spoof', \FoundryCo\Cloudflare\Responses\RadarEmailSecuritySpoof::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email threat category time series
	 */
	public function radarGetEmailSecurityTimeseriesGroupByThreatCategory(
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecurityCategory
	{
		return $this->client->get('/radar/email/security/timeseries_groups/threat_category', \FoundryCo\Cloudflare\Responses\RadarEmailSecurityCategory::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email TLS version time series
	 */
	public function radarGetEmailSecurityTimeseriesGroupByTlsVersion(
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecurityVersion
	{
		return $this->client->get('/radar/email/security/timeseries_groups/tls_version', \FoundryCo\Cloudflare\Responses\RadarEmailSecurityVersion::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get email security time series grouped by dimension
	 */
	public function timeseriesGroups(
		\FoundryCo\Cloudflare\Enums\RadarEmailSecurityDimension $dimension,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $tlsVersion = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecurityGroup
	{
		return $this->client->get('/radar/email/security/timeseries_groups/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarEmailSecurityGroup::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top TLDs by email message volume
	 */
	public function tlds(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityTldCategory $tldCategory = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecurityMessages
	{
		return $this->client->get('/radar/email/security/top/tlds', \FoundryCo\Cloudflare\Responses\RadarEmailSecurityMessages::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'tldCategory' => $tldCategory ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top TLDs by email malicious classification
	 */
	public function radarGetEmailSecurityTopTldsByMalicious(
		\FoundryCo\Cloudflare\Enums\RadarEmailSecurityMalicious $malicious,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityTldCategory $tldCategory = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecurityMalicious
	{
		return $this->client->get('/radar/email/security/top/tlds/malicious/' . $malicious, \FoundryCo\Cloudflare\Responses\RadarEmailSecurityMalicious::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'tldCategory' => $tldCategory ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top TLDs by email spam classification
	 */
	public function radarGetEmailSecurityTopTldsBySpam(
		\FoundryCo\Cloudflare\Enums\RadarEmailSecuritySpam $spam,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityTldCategory $tldCategory = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecuritySpam
	{
		return $this->client->get('/radar/email/security/top/tlds/spam/' . $spam, \FoundryCo\Cloudflare\Responses\RadarEmailSecuritySpam::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'tldCategory' => $tldCategory ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top TLDs by email spoof classification
	 */
	public function radarGetEmailSecurityTopTldsBySpoof(
		\FoundryCo\Cloudflare\Enums\RadarEmailSecuritySpoof $spoof,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $arc = null,
		?array $dkim = null,
		?array $dmarc = null,
		?array $spf = null,
		?array $tlsVersion = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityTldCategory $tldCategory = null,
		?\FoundryCo\Cloudflare\Enums\RadarEmailSecurityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarEmailSecuritySpoof
	{
		return $this->client->get('/radar/email/security/top/tlds/spoof/' . $spoof, \FoundryCo\Cloudflare\Responses\RadarEmailSecuritySpoof::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'arc' => $arc ?? null, 'dkim' => $dkim ?? null, 'dmarc' => $dmarc ?? null, 'spf' => $spf ?? null, 'tlsVersion' => $tlsVersion ?? null, 'tldCategory' => $tldCategory ?? null, 'format' => $format ?? null]);
	}
}
