<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarLeakedCredentialChecksResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get HTTP authentication requests by bot class summary
	 */
	public function list(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $compromised = null,
		?\FoundryCo\Cloudflare\Enums\RadarLeakedCredentialChecksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/leaked_credential_checks/summary/bot_class', \FoundryCo\Cloudflare\Responses\RadarGetLeakedCredentialChecksSummaryByBotClass::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'compromised' => $compromised ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP authentication requests by compromised credential status summary
	 */
	public function compromised(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $botClass = null,
		?\FoundryCo\Cloudflare\Enums\RadarLeakedCredentialChecksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/leaked_credential_checks/summary/compromised', \FoundryCo\Cloudflare\Responses\RadarGetLeakedCredentialChecksSummaryByCompromised::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'botClass' => $botClass ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP authentication requests distribution by dimension
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\RadarLeakedCredentialChecksDimension $dimension,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $botClass = null,
		?array $compromised = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLeakedCredentialChecksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/leaked_credential_checks/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetLeakedCredentialChecksSummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'botClass' => $botClass ?? null, 'compromised' => $compromised ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP authentication requests by bot class time series
	 */
	public function botClass(
		?\FoundryCo\Cloudflare\Enums\RadarLeakedCredentialChecksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $compromised = null,
		?\FoundryCo\Cloudflare\Enums\RadarLeakedCredentialChecksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/leaked_credential_checks/timeseries_groups/bot_class', \FoundryCo\Cloudflare\Responses\RadarGetLeakedCredentialChecksTimeseriesGroupByBotClass::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'compromised' => $compromised ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get HTTP authentication requests by compromised credential status time series
	 */
	public function radarGetLeakedCredentialChecksTimeseriesGroupByCompromised(
		?\FoundryCo\Cloudflare\Enums\RadarLeakedCredentialChecksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $botClass = null,
		?\FoundryCo\Cloudflare\Enums\RadarLeakedCredentialChecksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/leaked_credential_checks/timeseries_groups/compromised', \FoundryCo\Cloudflare\Responses\RadarGetLeakedCredentialChecksTimeseriesGroupByCompromised::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'botClass' => $botClass ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get time series distribution of HTTP authentication requests by dimension.
	 */
	public function timeseriesGroups(
		\FoundryCo\Cloudflare\Enums\RadarLeakedCredentialChecksDimension $dimension,
		?\FoundryCo\Cloudflare\Enums\RadarLeakedCredentialChecksAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $botClass = null,
		?array $compromised = null,
		?array $checkResult = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarLeakedCredentialChecksNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarLeakedCredentialChecksFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/leaked_credential_checks/timeseries_groups/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetLeakedCredentialChecksTimeseriesGroup::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'botClass' => $botClass ?? null, 'compromised' => $compromised ?? null, 'checkResult' => $checkResult ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'normalization' => $normalization ?? null, 'format' => $format ?? null]);
	}
}
