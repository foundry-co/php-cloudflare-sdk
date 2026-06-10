<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Snapshot
 */
readonly class MconnConnectorTelemetrySnapshotsListLatestItemsItem
{
	public function __construct(
		/** Count of failures to reclaim space */
		public ?float $countReclaimFailures = null,
		/** Count of reclaimed paths */
		public ?float $countReclaimedPaths = null,
		/** Count of failed snapshot recordings */
		public ?float $countRecordFailed = null,
		/** Count of failed snapshot transmissions */
		public ?float $countTransmitFailures = null,
		/** Time the Snapshot was recorded (seconds since the Unix epoch) */
		public ?float $t = null,
		/** Version */
		public ?string $v = null,
		public ?array $bonds = null,
		/** Count of processors/cores */
		public ?float $cpuCount = null,
		/** Percentage of time over a 10 second window that tasks were stalled */
		public ?float $cpuPressure10s = null,
		/** Percentage of time over a 5 minute window that tasks were stalled */
		public ?float $cpuPressure300s = null,
		/** Percentage of time over a 1 minute window that tasks were stalled */
		public ?float $cpuPressure60s = null,
		/** Total stall time (microseconds) */
		public ?float $cpuPressureTotalUs = null,
		/** Time spent running a virtual CPU or guest OS (milliseconds) */
		public ?float $cpuTimeGuestMs = null,
		/** Time spent running a niced guest (milliseconds) */
		public ?float $cpuTimeGuestNiceMs = null,
		/** Time spent in idle state (milliseconds) */
		public ?float $cpuTimeIdleMs = null,
		/** Time spent wait for I/O to complete (milliseconds) */
		public ?float $cpuTimeIowaitMs = null,
		/** Time spent servicing interrupts (milliseconds) */
		public ?float $cpuTimeIrqMs = null,
		/** Time spent in low-priority user mode (milliseconds) */
		public ?float $cpuTimeNiceMs = null,
		/** Time spent servicing softirqs (milliseconds) */
		public ?float $cpuTimeSoftirqMs = null,
		/** Time stolen (milliseconds) */
		public ?float $cpuTimeStealMs = null,
		/** Time spent in system mode (milliseconds) */
		public ?float $cpuTimeSystemMs = null,
		/** Time spent in user mode (milliseconds) */
		public ?float $cpuTimeUserMs = null,
		/** Number of network operations applied during state transition */
		public ?float $delta = null,
		public ?array $dhcpLeases = null,
		public ?array $disks = null,
		/** Simulated number of network operations applied during state transition */
		public ?float $epsilon = null,
		/** Name of high availability state */
		public ?string $haState = null,
		/** Numeric value associated with high availability state (0 = disabled, 1 = active, 2 = standby, 3 = stopped, 4 = fault) */
		public ?float $haValue = null,
		public ?array $interfaces = null,
		/** Percentage of time over a 10 second window that all tasks were stalled */
		public ?float $ioPressureFull10s = null,
		/** Percentage of time over a 5 minute window that all tasks were stalled */
		public ?float $ioPressureFull300s = null,
		/** Percentage of time over a 1 minute window that all tasks were stalled */
		public ?float $ioPressureFull60s = null,
		/** Total stall time (microseconds) */
		public ?float $ioPressureFullTotalUs = null,
		/** Percentage of time over a 10 second window that some tasks were stalled */
		public ?float $ioPressureSome10s = null,
		/** Percentage of time over a 3 minute window that some tasks were stalled */
		public ?float $ioPressureSome300s = null,
		/** Percentage of time over a 1 minute window that some tasks were stalled */
		public ?float $ioPressureSome60s = null,
		/** Total stall time (microseconds) */
		public ?float $ioPressureSomeTotalUs = null,
		/** Boot time (seconds since Unix epoch) */
		public ?float $kernelBtime = null,
		/** Number of context switches that the system underwent */
		public ?float $kernelCtxt = null,
		/** Number of forks since boot */
		public ?float $kernelProcesses = null,
		/** Number of processes blocked waiting for I/O */
		public ?float $kernelProcessesBlocked = null,
		/** Number of processes in runnable state */
		public ?float $kernelProcessesRunning = null,
		/** The fifteen-minute load average */
		public ?float $loadAverage15m = null,
		/** The one-minute load average */
		public ?float $loadAverage1m = null,
		/** The five-minute load average */
		public ?float $loadAverage5m = null,
		/** Number of currently runnable kernel scheduling entities */
		public ?float $loadAverageCur = null,
		/** Number of kernel scheduling entities that currently exist on the system */
		public ?float $loadAverageMax = null,
		/** Memory that has been used more recently */
		public ?float $memoryActiveBytes = null,
		/** Non-file backed huge pages mapped into user-space page tables */
		public ?float $memoryAnonHugepagesBytes = null,
		/** Non-file backed pages mapped into user-space page tables */
		public ?float $memoryAnonPagesBytes = null,
		/** Estimate of how much memory is available for starting new applications */
		public ?float $memoryAvailableBytes = null,
		/** Memory used for block device bounce buffers */
		public ?float $memoryBounceBytes = null,
		/** Relatively temporary storage for raw disk blocks */
		public ?float $memoryBuffersBytes = null,
		/** In-memory cache for files read from the disk */
		public ?float $memoryCachedBytes = null,
		/** Free CMA (Contiguous Memory Allocator) pages */
		public ?float $memoryCmaFreeBytes = null,
		/** Total CMA (Contiguous Memory Allocator) pages */
		public ?float $memoryCmaTotalBytes = null,
		/** Total amount of memory currently available to be allocated on the system */
		public ?float $memoryCommitLimitBytes = null,
		/** Amount of memory presently allocated on the system */
		public ?float $memoryCommittedAsBytes = null,
		/** Memory which is waiting to get written back to the disk */
		public ?float $memoryDirtyBytes = null,
		/** The sum of LowFree and HighFree */
		public ?float $memoryFreeBytes = null,
		/** Amount of free highmem */
		public ?float $memoryHighFreeBytes = null,
		/** Total amount of highmem */
		public ?float $memoryHighTotalBytes = null,
		/** The number of huge pages in the pool that are not yet allocated */
		public ?float $memoryHugepagesFree = null,
		/** Number of huge pages for which a commitment has been made, but no allocation has yet been made */
		public ?float $memoryHugepagesRsvd = null,
		/** Number of huge pages in the pool above the threshold */
		public ?float $memoryHugepagesSurp = null,
		/** The size of the pool of huge pages */
		public ?float $memoryHugepagesTotal = null,
		/** The size of huge pages */
		public ?float $memoryHugepagesizeBytes = null,
		/** Memory which has been less recently used */
		public ?float $memoryInactiveBytes = null,
		/** Kernel allocations that the kernel will attempt to reclaim under memory pressure */
		public ?float $memoryKReclaimableBytes = null,
		/** Amount of memory allocated to kernel stacks */
		public ?float $memoryKernelStackBytes = null,
		/** Amount of free lowmem */
		public ?float $memoryLowFreeBytes = null,
		/** Total amount of lowmem */
		public ?float $memoryLowTotalBytes = null,
		/** Files which have been mapped into memory */
		public ?float $memoryMappedBytes = null,
		/** Amount of memory dedicated to the lowest level of page tables */
		public ?float $memoryPageTablesBytes = null,
		/** Memory allocated to the per-cpu alloctor used to back per-cpu allocations */
		public ?float $memoryPerCpuBytes = null,
		/** Percentage of time over a 10 second window that all tasks were stalled */
		public ?float $memoryPressureFull10s = null,
		/** Percentage of time over a 5 minute window that all tasks were stalled */
		public ?float $memoryPressureFull300s = null,
		/** Percentage of time over a 1 minute window that all tasks were stalled */
		public ?float $memoryPressureFull60s = null,
		/** Total stall time (microseconds) */
		public ?float $memoryPressureFullTotalUs = null,
		/** Percentage of time over a 10 second window that some tasks were stalled */
		public ?float $memoryPressureSome10s = null,
		/** Percentage of time over a 5 minute window that some tasks were stalled */
		public ?float $memoryPressureSome300s = null,
		/** Percentage of time over a 1 minute window that some tasks were stalled */
		public ?float $memoryPressureSome60s = null,
		/** Total stall time (microseconds) */
		public ?float $memoryPressureSomeTotalUs = null,
		/** Part of slab that can be reclaimed on memory pressure */
		public ?float $memorySReclaimableBytes = null,
		/** Part of slab that cannot be reclaimed on memory pressure */
		public ?float $memorySUnreclaimBytes = null,
		/** Amount of memory dedicated to the lowest level of page tables */
		public ?float $memorySecondaryPageTablesBytes = null,
		/** Amount of memory consumed by tmpfs */
		public ?float $memoryShmemBytes = null,
		/** Memory used by shmem and tmpfs, allocated with huge pages */
		public ?float $memoryShmemHugepagesBytes = null,
		/** Shared memory mapped into user space with huge pages */
		public ?float $memoryShmemPmdMappedBytes = null,
		/** In-kernel data structures cache */
		public ?float $memorySlabBytes = null,
		/** Memory swapped out and back in while still in swap file */
		public ?float $memorySwapCachedBytes = null,
		/** Amount of swap space that is currently unused */
		public ?float $memorySwapFreeBytes = null,
		/** Total amount of swap space available */
		public ?float $memorySwapTotalBytes = null,
		/** Total usable RAM */
		public ?float $memoryTotalBytes = null,
		/** Largest contiguous block of vmalloc area which is free */
		public ?float $memoryVmallocChunkBytes = null,
		/** Total size of vmalloc memory area */
		public ?float $memoryVmallocTotalBytes = null,
		/** Amount of vmalloc area which is used */
		public ?float $memoryVmallocUsedBytes = null,
		/** Memory which is actively being written back to the disk */
		public ?float $memoryWritebackBytes = null,
		/** Memory used by FUSE for temporary writeback buffers */
		public ?float $memoryWritebackTmpBytes = null,
		/** Memory consumed by the zswap backend, compressed */
		public ?float $memoryZSwapBytes = null,
		/** Amount of anonymous memory stored in zswap, uncompressed */
		public ?float $memoryZSwappedBytes = null,
		public ?array $mounts = null,
		public ?array $netdevs = null,
		/** Platform identifier */
		public ?string $platform = null,
		/** Number of ICMP Address Mask Reply messages received */
		public ?float $snmpIcmpInAddrMaskReps = null,
		/** Number of ICMP Address Mask Request messages received */
		public ?float $snmpIcmpInAddrMasks = null,
		/** Number of ICMP messages received with bad checksums */
		public ?float $snmpIcmpInCsumErrors = null,
		/** Number of ICMP Destination Unreachable messages received */
		public ?float $snmpIcmpInDestUnreachs = null,
		/** Number of ICMP Echo Reply messages received */
		public ?float $snmpIcmpInEchoReps = null,
		/** Number of ICMP Echo (request) messages received */
		public ?float $snmpIcmpInEchos = null,
		/** Number of ICMP messages received with ICMP-specific errors */
		public ?float $snmpIcmpInErrors = null,
		/** Number of ICMP messages received */
		public ?float $snmpIcmpInMsgs = null,
		/** Number of ICMP Parameter Problem messages received */
		public ?float $snmpIcmpInParmProbs = null,
		/** Number of ICMP Redirect messages received */
		public ?float $snmpIcmpInRedirects = null,
		/** Number of ICMP Source Quench messages received */
		public ?float $snmpIcmpInSrcQuenchs = null,
		/** Number of ICMP Time Exceeded messages received */
		public ?float $snmpIcmpInTimeExcds = null,
		/** Number of ICMP Address Mask Request messages received */
		public ?float $snmpIcmpInTimestampReps = null,
		/** Number of ICMP Timestamp (request) messages received */
		public ?float $snmpIcmpInTimestamps = null,
		/** Number of ICMP Address Mask Reply messages sent */
		public ?float $snmpIcmpOutAddrMaskReps = null,
		/** Number of ICMP Address Mask Request messages sent */
		public ?float $snmpIcmpOutAddrMasks = null,
		/** Number of ICMP Destination Unreachable messages sent */
		public ?float $snmpIcmpOutDestUnreachs = null,
		/** Number of ICMP Echo Reply messages sent */
		public ?float $snmpIcmpOutEchoReps = null,
		/** Number of ICMP Echo (request) messages sent */
		public ?float $snmpIcmpOutEchos = null,
		/** Number of ICMP messages which this entity did not send due to ICMP-specific errors */
		public ?float $snmpIcmpOutErrors = null,
		/** Number of ICMP messages attempted to send */
		public ?float $snmpIcmpOutMsgs = null,
		/** Number of ICMP Parameter Problem messages sent */
		public ?float $snmpIcmpOutParmProbs = null,
		/** Number of ICMP Redirect messages sent */
		public ?float $snmpIcmpOutRedirects = null,
		/** Number of ICMP Source Quench messages sent */
		public ?float $snmpIcmpOutSrcQuenchs = null,
		/** Number of ICMP Time Exceeded messages sent */
		public ?float $snmpIcmpOutTimeExcds = null,
		/** Number of ICMP Timestamp Reply messages sent */
		public ?float $snmpIcmpOutTimestampReps = null,
		/** Number of ICMP Timestamp (request) messages sent */
		public ?float $snmpIcmpOutTimestamps = null,
		/** Default value of the Time-To-Live field of the IP header */
		public ?float $snmpIpDefaultTtl = null,
		/** Number of datagrams forwarded to their final destination */
		public ?float $snmpIpForwDatagrams = null,
		/** Set when acting as an IP gateway */
		public ?bool $snmpIpForwardingEnabled = null,
		/** Number of datagrams generated by fragmentation */
		public ?float $snmpIpFragCreates = null,
		/** Number of datagrams discarded because fragmentation failed */
		public ?float $snmpIpFragFails = null,
		/** Number of datagrams successfully fragmented */
		public ?float $snmpIpFragOks = null,
		/** Number of input datagrams discarded due to errors in the IP address */
		public ?float $snmpIpInAddrErrors = null,
		/** Number of input datagrams successfully delivered to IP user-protocols */
		public ?float $snmpIpInDelivers = null,
		/** Number of input datagrams otherwise discarded */
		public ?float $snmpIpInDiscards = null,
		/** Number of input datagrams discarded due to errors in the IP header */
		public ?float $snmpIpInHdrErrors = null,
		/** Number of input datagrams received from interfaces */
		public ?float $snmpIpInReceives = null,
		/** Number of input datagrams discarded due unknown or unsupported protocol */
		public ?float $snmpIpInUnknownProtos = null,
		/** Number of output datagrams otherwise discarded */
		public ?float $snmpIpOutDiscards = null,
		/** Number of output datagrams discarded because no route matched */
		public ?float $snmpIpOutNoRoutes = null,
		/** Number of datagrams supplied for transmission */
		public ?float $snmpIpOutRequests = null,
		/** Number of failures detected by the reassembly algorithm */
		public ?float $snmpIpReasmFails = null,
		/** Number of datagrams successfully reassembled */
		public ?float $snmpIpReasmOks = null,
		/** Number of fragments received which needed to be reassembled */
		public ?float $snmpIpReasmReqds = null,
		/** Number of seconds fragments are held while awaiting reassembly */
		public ?float $snmpIpReasmTimeout = null,
		/** Number of times TCP transitions to SYN-SENT from CLOSED */
		public ?float $snmpTcpActiveOpens = null,
		/** Number of times TCP transitions to CLOSED from SYN-SENT or SYN-RCVD, plus transitions to LISTEN from SYN-RCVD */
		public ?float $snmpTcpAttemptFails = null,
		/** Number of TCP connections in ESTABLISHED or CLOSE-WAIT */
		public ?float $snmpTcpCurrEstab = null,
		/** Number of times TCP transitions to CLOSED from ESTABLISHED or CLOSE-WAIT */
		public ?float $snmpTcpEstabResets = null,
		/** Number of TCP segments received with checksum errors */
		public ?float $snmpTcpInCsumErrors = null,
		/** Number of TCP segments received in error */
		public ?float $snmpTcpInErrs = null,
		/** Number of TCP segments received */
		public ?float $snmpTcpInSegs = null,
		/** Limit on the total number of TCP connections */
		public ?float $snmpTcpMaxConn = null,
		/** Number of TCP segments sent with RST flag */
		public ?float $snmpTcpOutRsts = null,
		/** Number of TCP segments sent */
		public ?float $snmpTcpOutSegs = null,
		/** Number of times TCP transitions to SYN-RCVD from LISTEN */
		public ?float $snmpTcpPassiveOpens = null,
		/** Number of TCP segments retransmitted */
		public ?float $snmpTcpRetransSegs = null,
		/** Maximum value permitted by a TCP implementation for the retransmission timeout (milliseconds) */
		public ?float $snmpTcpRtoMax = null,
		/** Minimum value permitted by a TCP implementation for the retransmission timeout (milliseconds) */
		public ?float $snmpTcpRtoMin = null,
		/** Number of UDP datagrams delivered to UDP applications */
		public ?float $snmpUdpInDatagrams = null,
		/** Number of UDP datagrams failed to be delivered for reasons other than lack of application at the destination port */
		public ?float $snmpUdpInErrors = null,
		/** Number of UDP datagrams received for which there was not application at the destination port */
		public ?float $snmpUdpNoPorts = null,
		/** Number of UDP datagrams sent */
		public ?float $snmpUdpOutDatagrams = null,
		/** Boottime of the system (seconds since the Unix epoch) */
		public ?float $systemBootTimeS = null,
		public ?array $thermals = null,
		public ?array $tunnels = null,
		/** Sum of how much time each core has spent idle */
		public ?float $uptimeIdleMs = null,
		/** Uptime of the system, including time spent in suspend */
		public ?float $uptimeTotalMs = null,
	) {
	}
}
