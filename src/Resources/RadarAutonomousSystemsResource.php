<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarAutonomousSystemsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List autonomous systems
	 */
	public function list(
		?int $limit = null,
		?int $offset = null,
		?string $asn = null,
		?string $location = null,
		?\FoundryCo\Cloudflare\Enums\RadarAutonomousSystemsOrderBy $orderBy = null,
		?\FoundryCo\Cloudflare\Enums\RadarAutonomousSystemsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarAutonomousSystemsList
	{
		return $this->client->get('/radar/entities/asns', \FoundryCo\Cloudflare\Responses\RadarAutonomousSystemsList::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'orderBy' => $orderBy ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AS rankings by botnet threat feed activity
	 */
	public function botnetThreatFeed(
		?int $limit = null,
		?int $offset = null,
		?\FoundryCo\Cloudflare\Enums\RadarAutonomousSystemsMetric $metric = null,
		?\DateTimeImmutable $date = null,
		?string $compareDateRange = null,
		?string $location = null,
		?array $asn = null,
		?\FoundryCo\Cloudflare\Enums\RadarAutonomousSystemsSortOrder $sortOrder = null,
		?\FoundryCo\Cloudflare\Enums\RadarAutonomousSystemsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarAutonomousSystemsFeed
	{
		return $this->client->get('/radar/entities/asns/botnet_threat_feed', \FoundryCo\Cloudflare\Responses\RadarAutonomousSystemsFeed::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null, 'metric' => $metric ?? null, 'date' => $date ?? null, 'compareDateRange' => $compareDateRange ?? null, 'location' => $location ?? null, 'asn' => $asn ?? null, 'sortOrder' => $sortOrder ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AS details by IP address
	 */
	public function ip(
		?string $ip = null,
		?\FoundryCo\Cloudflare\Enums\RadarAutonomousSystemsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarAutonomousSystemsIp
	{
		return $this->client->get('/radar/entities/asns/ip', \FoundryCo\Cloudflare\Responses\RadarAutonomousSystemsIp::class, ['ip' => $ip ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AS details by ASN
	 */
	public function get(
		int $asn,
		?\FoundryCo\Cloudflare\Enums\RadarAutonomousSystemsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarAutonomousSystemsId
	{
		return $this->client->get('/radar/entities/asns/' . $asn, \FoundryCo\Cloudflare\Responses\RadarAutonomousSystemsId::class, ['format' => $format ?? null]);
	}


	/**
	 * Get IRR AS-SETs that an AS is a member of
	 */
	public function asSet(
		int $asn,
		?\FoundryCo\Cloudflare\Enums\RadarAutonomousSystemsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarAutonomousSystemsSet
	{
		return $this->client->get('/radar/entities/asns/' . $asn . '/as_set', \FoundryCo\Cloudflare\Responses\RadarAutonomousSystemsSet::class, ['format' => $format ?? null]);
	}


	/**
	 * Get AS-level relationships by ASN
	 */
	public function rel(
		int $asn,
		?int $asn2 = null,
		?\FoundryCo\Cloudflare\Enums\RadarAutonomousSystemsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarAutonomousSystemsRel
	{
		return $this->client->get('/radar/entities/asns/' . $asn . '/rel', \FoundryCo\Cloudflare\Responses\RadarAutonomousSystemsRel::class, ['asn2' => $asn2 ?? null, 'format' => $format ?? null]);
	}
}
