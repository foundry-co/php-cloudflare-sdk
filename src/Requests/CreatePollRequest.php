<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a poll
 */
readonly class CreatePollRequest
{
	public function __construct(
		/** Different options for the question */
		public array $options,
		/** Question of the poll */
		public string $question,
		/** if voters on a poll are anonymous */
		public ?bool $anonymous = null,
		/** if votes on an option are visible before a person votes */
		public ?bool $hideVotes = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'options' => $this->options,
		    'question' => $this->question,
		    'anonymous' => $this->anonymous,
		    'hide_votes' => $this->hideVotes,
		], fn ($v) => $v !== null);
	}
}
