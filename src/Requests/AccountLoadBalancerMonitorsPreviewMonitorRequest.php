<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Preview Monitor
 */
readonly class AccountLoadBalancerMonitorsPreviewMonitorRequest
{
	public function __construct(
		/** Do not validate the certificate when monitor use HTTPS. This parameter is currently only valid for HTTP and HTTPS monitors. */
		public ?bool $allowInsecure = null,
		/** To be marked unhealthy the monitored origin must fail this healthcheck N consecutive times. */
		public ?int $consecutiveDown = null,
		/** To be marked healthy the monitored origin must pass this healthcheck N consecutive times. */
		public ?int $consecutiveUp = null,
		/** Object description. */
		public ?string $description = null,
		/** A case-insensitive sub-string to look for in the response body. If this string is not found, the origin will be marked as unhealthy. This parameter is only valid for HTTP and HTTPS monitors. */
		public ?string $expectedBody = null,
		/** The expected HTTP response code or code range of the health check. This parameter is only valid for HTTP and HTTPS monitors. */
		public ?string $expectedCodes = null,
		/** Follow redirects if returned by the origin. This parameter is only valid for HTTP and HTTPS monitors. */
		public ?bool $followRedirects = null,
		/** The HTTP request headers to send in the health check. It is recommended you set a Host header by default. The User-Agent header cannot be overridden. This parameter is only valid for HTTP and HTTPS monitors. */
		public ?array $header = null,
		/** The interval between each health check. Shorter intervals may improve failover time, but will increase load on the origins as we check from multiple locations. */
		public ?int $interval = null,
		/** The method to use for the health check. This defaults to 'GET' for HTTP/HTTPS based checks and 'connection_established' for TCP based health checks. */
		public ?string $method = null,
		/** The endpoint path you want to conduct a health check against. This parameter is only valid for HTTP and HTTPS monitors. */
		public ?string $path = null,
		/** The port number to connect to for the health check. Required for TCP, UDP, and SMTP checks. HTTP and HTTPS checks should only define the port when using a non-standard port (HTTP: default 80, HTTPS: default 443). */
		public ?int $port = null,
		/** Assign this monitor to emulate the specified zone while probing. This parameter is only valid for HTTP and HTTPS monitors. */
		public ?string $probeZone = null,
		/** The number of retries to attempt in case of a timeout before marking the origin as unhealthy. Retries are attempted immediately. */
		public ?int $retries = null,
		/** The timeout (in seconds) before marking the health check as failed. */
		public ?int $timeout = null,
		/** The protocol to use for the health check. Currently supported protocols are 'HTTP','HTTPS', 'TCP', 'ICMP-PING', 'UDP-ICMP', and 'SMTP'. */
		public ?\FoundryCo\Cloudflare\Enums\AccountLoadBalancerMonitorsPreviewMonitorRequestType $type = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'allow_insecure' => $this->allowInsecure,
		    'consecutive_down' => $this->consecutiveDown,
		    'consecutive_up' => $this->consecutiveUp,
		    'description' => $this->description,
		    'expected_body' => $this->expectedBody,
		    'expected_codes' => $this->expectedCodes,
		    'follow_redirects' => $this->followRedirects,
		    'header' => $this->header,
		    'interval' => $this->interval,
		    'method' => $this->method,
		    'path' => $this->path,
		    'port' => $this->port,
		    'probe_zone' => $this->probeZone,
		    'retries' => $this->retries,
		    'timeout' => $this->timeout,
		    'type' => $this->type?->value,
		], fn ($v) => $v !== null);
	}
}
