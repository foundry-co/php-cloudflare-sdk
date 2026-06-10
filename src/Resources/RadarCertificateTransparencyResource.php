<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarCertificateTransparencyResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List certificate authorities
	 */
	public function list(
		?int $limit = null,
		?int $offset = null,
		?\FoundryCo\Cloudflare\Enums\RadarCertificateTransparencyFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ct/authorities', \FoundryCo\Cloudflare\Responses\RadarGetCertificateAuthorities::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get certificate authority details
	 */
	public function get(
		string $caSlug,
		?\FoundryCo\Cloudflare\Enums\RadarCertificateTransparencyFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ct/authorities/' . $caSlug, \FoundryCo\Cloudflare\Responses\RadarGetCertificateAuthorityDetails::class, ['format' => $format ?? null]);
	}


	/**
	 * List certificate logs
	 */
	public function logs(
		?int $limit = null,
		?int $offset = null,
		?\FoundryCo\Cloudflare\Enums\RadarCertificateTransparencyFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ct/logs', \FoundryCo\Cloudflare\Responses\RadarGetCertificateLogs::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get certificate log details
	 */
	public function radarGetCertificateLogDetails(
		string $logSlug,
		?\FoundryCo\Cloudflare\Enums\RadarCertificateTransparencyFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ct/logs/' . $logSlug, \FoundryCo\Cloudflare\Responses\RadarGetCertificateLogDetails::class, ['format' => $format ?? null]);
	}


	/**
	 * Get certificate distribution by dimension
	 */
	public function summary(
		\FoundryCo\Cloudflare\Enums\RadarCertificateTransparencyDimension $dimension,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?int $limitPerGroup = null,
		?array $ca = null,
		?array $caOwner = null,
		?array $duration = null,
		?array $entryType = null,
		?array $expirationStatus = null,
		?array $hasIps = null,
		?array $hasWildcards = null,
		?array $log = null,
		?array $logApi = null,
		?array $logOperator = null,
		?array $publicKeyAlgorithm = null,
		?array $signatureAlgorithm = null,
		?array $tld = null,
		?array $validationLevel = null,
		?array $uniqueEntries = null,
		?\FoundryCo\Cloudflare\Enums\RadarCertificateTransparencyNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarCertificateTransparencyFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ct/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetCtSummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'ca' => $ca ?? null, 'caOwner' => $caOwner ?? null, 'duration' => $duration ?? null, 'entryType' => $entryType ?? null, 'expirationStatus' => $expirationStatus ?? null, 'hasIps' => $hasIps ?? null, 'hasWildcards' => $hasWildcards ?? null, 'log' => $log ?? null, 'logApi' => $logApi ?? null, 'logOperator' => $logOperator ?? null, 'publicKeyAlgorithm' => $publicKeyAlgorithm ?? null, 'signatureAlgorithm' => $signatureAlgorithm ?? null, 'tld' => $tld ?? null, 'validationLevel' => $validationLevel ?? null, 'uniqueEntries' => $uniqueEntries ?? null, 'normalization' => $normalization ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get certificates time series
	 */
	public function timeseries(
		?\FoundryCo\Cloudflare\Enums\RadarCertificateTransparencyAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $ca = null,
		?array $caOwner = null,
		?array $duration = null,
		?array $entryType = null,
		?array $expirationStatus = null,
		?array $hasIps = null,
		?array $hasWildcards = null,
		?array $log = null,
		?array $logApi = null,
		?array $logOperator = null,
		?array $publicKeyAlgorithm = null,
		?array $signatureAlgorithm = null,
		?array $tld = null,
		?array $validationLevel = null,
		?array $uniqueEntries = null,
		?\FoundryCo\Cloudflare\Enums\RadarCertificateTransparencyFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ct/timeseries', \FoundryCo\Cloudflare\Responses\RadarGetCtTimeseries::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'ca' => $ca ?? null, 'caOwner' => $caOwner ?? null, 'duration' => $duration ?? null, 'entryType' => $entryType ?? null, 'expirationStatus' => $expirationStatus ?? null, 'hasIps' => $hasIps ?? null, 'hasWildcards' => $hasWildcards ?? null, 'log' => $log ?? null, 'logApi' => $logApi ?? null, 'logOperator' => $logOperator ?? null, 'publicKeyAlgorithm' => $publicKeyAlgorithm ?? null, 'signatureAlgorithm' => $signatureAlgorithm ?? null, 'tld' => $tld ?? null, 'validationLevel' => $validationLevel ?? null, 'uniqueEntries' => $uniqueEntries ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get time series of certificate distribution by dimension
	 */
	public function timeseriesGroups(
		\FoundryCo\Cloudflare\Enums\RadarCertificateTransparencyDimension $dimension,
		?\FoundryCo\Cloudflare\Enums\RadarCertificateTransparencyAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?int $limitPerGroup = null,
		?array $ca = null,
		?array $caOwner = null,
		?array $duration = null,
		?array $entryType = null,
		?array $expirationStatus = null,
		?array $hasIps = null,
		?array $hasWildcards = null,
		?array $log = null,
		?array $logApi = null,
		?array $logOperator = null,
		?array $publicKeyAlgorithm = null,
		?array $signatureAlgorithm = null,
		?array $validationLevel = null,
		?array $tld = null,
		?\FoundryCo\Cloudflare\Enums\RadarCertificateTransparencyNormalization $normalization = null,
		?array $uniqueEntries = null,
		?\FoundryCo\Cloudflare\Enums\RadarCertificateTransparencyFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ct/timeseries_groups/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetCtTimeseriesGroup::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'ca' => $ca ?? null, 'caOwner' => $caOwner ?? null, 'duration' => $duration ?? null, 'entryType' => $entryType ?? null, 'expirationStatus' => $expirationStatus ?? null, 'hasIps' => $hasIps ?? null, 'hasWildcards' => $hasWildcards ?? null, 'log' => $log ?? null, 'logApi' => $logApi ?? null, 'logOperator' => $logOperator ?? null, 'publicKeyAlgorithm' => $publicKeyAlgorithm ?? null, 'signatureAlgorithm' => $signatureAlgorithm ?? null, 'validationLevel' => $validationLevel ?? null, 'tld' => $tld ?? null, 'normalization' => $normalization ?? null, 'uniqueEntries' => $uniqueEntries ?? null, 'format' => $format ?? null]);
	}
}
