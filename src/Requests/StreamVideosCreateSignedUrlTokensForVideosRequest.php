<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create signed URL tokens for videos
 */
readonly class StreamVideosCreateSignedUrlTokensForVideosRequest
{
	public function __construct(
		/** The optional list of access rule constraints on the token. Access can be blocked or allowed based on an IP, IP range, or by country. Access rules are evaluated from first to last. If a rule matches, the associated action is applied and no further rules are evaluated. */
		public ?array $accessRules = null,
		/** The optional boolean value that enables using signed tokens to access MP4 download links for a video. */
		public ?bool $downloadable = null,
		/** The optional unix epoch timestamp that specficies the time after a token is not accepted. The maximum time specification is 24 hours from issuing time. If this field is not set, the default is one hour after issuing. */
		public ?int $exp = null,
		/** Optional flags for the signed token. */
		public ?\FoundryCo\Cloudflare\Responses\StreamVideosCreateSignedUrlTokensForVideosRequestFlags $flags = null,
		/** The optional ID of a Stream signing key. If present, the `pem` field is also required. */
		public ?string $id = null,
		/** The optional unix epoch timestamp that specifies the time before a the token is not accepted. If this field is not set, the default is one hour before issuing. */
		public ?int $nbf = null,
		/** The optional base64 encoded private key in PEM format associated with a Stream signing key. If present, the `id` field is also required. */
		public ?string $pem = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'accessRules' => $this->accessRules,
		    'downloadable' => $this->downloadable,
		    'exp' => $this->exp,
		    'flags' => $this->flags?->toArray(),
		    'id' => $this->id,
		    'nbf' => $this->nbf,
		    'pem' => $this->pem,
		], fn ($v) => $v !== null);
	}
}
