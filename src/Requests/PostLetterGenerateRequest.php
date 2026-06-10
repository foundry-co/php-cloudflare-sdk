<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Generate takedown letter
 */
readonly class PostLetterGenerateRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Responses\PostLetterGenerateRequestFields $fields,
		public string $templateId,
		public ?bool $createNotice = null,
		public ?\FoundryCo\Cloudflare\Enums\PostLetterGenerateRequestFormat $format = null,
		public ?\FoundryCo\Cloudflare\Responses\PostLetterGenerateRequestNoticeParams $noticeParams = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'fields' => $this->fields->toArray(),
		    'templateId' => $this->templateId,
		    'createNotice' => $this->createNotice,
		    'format' => $this->format?->value,
		    'noticeParams' => $this->noticeParams?->toArray(),
		], fn ($v) => $v !== null);
	}
}
