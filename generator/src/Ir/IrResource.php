<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Generator\Ir;

class IrResource
{
    public const SCOPE_TOP     = 'top';
    public const SCOPE_ZONE    = 'zone';
    public const SCOPE_ACCOUNT = 'account';

    /**
     * @param IrOperation[]  $operations
     * @param IrResource[]   $children     sub-resources accessed via this resource
     */
    public function __construct(
        public readonly string $tag,             // original tag string
        public readonly string $name,            // e.g. 'DnsRecords'
        public readonly string $namespace,       // PHP namespace
        public readonly string $scope,           // SCOPE_* constant
        public readonly string $pathPrefix,      // common path prefix (after scope params stripped)
        public readonly array $operations,
        public array $children = [],
        public ?IrResource $parent = null,
    ) {}

    public function className(): string
    {
        return $this->name . 'Resource';
    }

    public function fqn(): string
    {
        return $this->namespace . '\\' . $this->className();
    }

    public function accessorMethod(): string
    {
        // ZoneDnsRecords → dnsRecords(), AccessApplications → applications()
        $name = $this->name;

        // Strip scope prefix only when what remains starts with an uppercase letter
        // (i.e. ZoneDnsRecords → DnsRecords, but Zones stays Zones, Accounts stays Accounts)
        foreach (['Zone', 'Account'] as $prefix) {
            if (str_starts_with($name, $prefix)) {
                $remainder = substr($name, strlen($prefix));
                if (strlen($remainder) > 1 && ctype_upper($remainder[0])) {
                    $name = $remainder;
                    break;
                }
            }
        }

        // lcfirst on acronym-led names: "DNSRecords" → "dnsRecords", "IP" → "ip"
        // Find the length of the leading uppercase run and lowercase it all except the last char
        if (preg_match('/^([A-Z]{2,})([A-Z][a-z]|$)/', $name, $m)) {
            // "DNSRecords" → leading run = "DNS", next = "R" → lowercase "DNS" → "dnsRecords"
            $lower = strtolower($m[1]);
            $name = $lower . substr($name, strlen($m[1]));
        } else {
            $name = lcfirst($name);
        }

        return $name;
    }
}
