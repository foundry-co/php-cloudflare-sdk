<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Validate a DLP regex pattern
 */
readonly class DlpPatternValidateRequest
{
	public function __construct(
		public string $regex,
		/**
		 * Maximum number of bytes that the regular expression can match.
		 *
		 * If this is `null` then there is no limit on the length. Patterns can use
		 * `*` and `+`. Otherwise repeats should use a range `{m,n}` to restrict
		 * patterns to the length. If this field is missing, then a default length
		 * limit is used.
		 *
		 * Note that the length is specified in bytes. Since regular expressions
		 * use UTF-8 the pattern `.` can match up to 4 bytes. Hence `.{1,256}`
		 * has a maximum length of 1024 bytes.
		 */
		public ?int $maxMatchBytes = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'regex' => $this->regex,
		    'max_match_bytes' => $this->maxMatchBytes,
		], fn ($v) => $v !== null);
	}
}
