<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarRobotstxtResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get top domain categories by robots.txt files parsed
	 */
	public function list(
		?int $limit = null,
		?array $name = null,
		?\FoundryCo\Cloudflare\Enums\RadarRobotstxtUserAgentCategory $userAgentCategory = null,
		?array $date = null,
		?\FoundryCo\Cloudflare\Enums\RadarRobotstxtFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarRobotstxtParsed
	{
		return $this->client->get('/radar/robots_txt/top/domain_categories', \FoundryCo\Cloudflare\Responses\RadarRobotstxtParsed::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'userAgentCategory' => $userAgentCategory ?? null, 'date' => $date ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top user agents on robots.txt files
	 */
	public function directive(
		?int $limit = null,
		?array $name = null,
		?\FoundryCo\Cloudflare\Enums\RadarRobotstxtUserAgentCategory $userAgentCategory = null,
		?array $date = null,
		?array $domainCategory = null,
		?\FoundryCo\Cloudflare\Enums\RadarRobotstxtDirective $directive = null,
		?\FoundryCo\Cloudflare\Enums\RadarRobotstxtFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarRobotstxtDirective
	{
		return $this->client->get('/radar/robots_txt/top/user_agents/directive', \FoundryCo\Cloudflare\Responses\RadarRobotstxtDirective::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'userAgentCategory' => $userAgentCategory ?? null, 'date' => $date ?? null, 'domainCategory' => $domainCategory ?? null, 'directive' => $directive ?? null, 'format' => $format ?? null]);
	}
}
