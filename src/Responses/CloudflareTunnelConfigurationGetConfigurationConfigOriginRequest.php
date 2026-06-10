<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configuration parameters for the public hostname specific connection settings between cloudflared and origin server.
 */
readonly class CloudflareTunnelConfigurationGetConfigurationConfigOriginRequest
{
	public function __construct(
		/** For all L7 requests to this hostname, cloudflared will validate each request's Cf-Access-Jwt-Assertion request header. */
		public ?CloudflareTunnelConfigurationGetConfigurationConfigOriginRequestAccess $access = null,
		/** Path to the certificate authority (CA) for the certificate of your origin. This option should be used only if your certificate is not signed by Cloudflare. */
		public ?string $caPool = null,
		/** Timeout for establishing a new TCP connection to your origin server. This excludes the time taken to establish TLS, which is controlled by tlsTimeout. */
		public ?int $connectTimeout = null,
		/** Disables chunked transfer encoding. Useful if you are running a WSGI server. */
		public ?bool $disableChunkedEncoding = null,
		/** Attempt to connect to origin using HTTP2. Origin must be configured as https. */
		public ?bool $http2Origin = null,
		/** Sets the HTTP Host header on requests sent to the local service. */
		public ?string $httpHostHeader = null,
		/** Maximum number of idle keepalive connections between Tunnel and your origin. This does not restrict the total number of concurrent connections. */
		public ?int $keepAliveConnections = null,
		/** Timeout after which an idle keepalive connection can be discarded. */
		public ?int $keepAliveTimeout = null,
		/** Auto configure the Hostname on the origin server certificate. */
		public ?bool $matchSNItoHost = null,
		/** Disable the “happy eyeballs” algorithm for IPv4/IPv6 fallback if your local network has misconfigured one of the protocols. */
		public ?bool $noHappyEyeballs = null,
		/** Disables TLS verification of the certificate presented by your origin. Will allow any certificate from the origin to be accepted. */
		public ?bool $noTLSVerify = null,
		/** Hostname that cloudflared should expect from your origin server certificate. */
		public ?string $originServerName = null,
		/**
		 * cloudflared starts a proxy server to translate HTTP traffic into TCP when proxying, for example, SSH or RDP. This configures what type of proxy will be started. Valid options are: "" for the regular proxy and "socks" for a SOCKS5 proxy.
		 */
		public ?string $proxyType = null,
		/** The timeout after which a TCP keepalive packet is sent on a connection between Tunnel and the origin server. */
		public ?int $tcpKeepAlive = null,
		/** Timeout for completing a TLS handshake to your origin server, if you have chosen to connect Tunnel to an HTTPS server. */
		public ?int $tlsTimeout = null,
	) {
	}
}
