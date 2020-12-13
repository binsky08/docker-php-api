<?php

declare(strict_types=1);

namespace Docker\API\Model;

class HostConfig
{
    /**
     * An integer value representing this container's relative CPU weight versus other containers.
     *
     * @var int
     */
    protected $cpuShares;
    /**
     * Memory limit in bytes.
     *
     * @var int
     */
    protected $memory = 0;
    /**
     * Path to `cgroups` under which the container's `cgroup` is created. If the path is not absolute, the path is considered to be relative to the `cgroups` path of the init process. Cgroups are created if they do not already exist.
     *
     * @var string
     */
    protected $cgroupParent;
    /**
     * Block IO weight (relative weight).
     *
     * @var int
     */
    protected $blkioWeight;
    /**
     * Block IO weight (relative device weight) in the form `[{"Path": "device_path", "Weight": weight}]`.
     *
     * @var ResourcesBlkioWeightDeviceItem[]
     */
    protected $blkioWeightDevice;
    /**
     * Limit read rate (bytes per second) from a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @var ThrottleDevice[]
     */
    protected $blkioDeviceReadBps;
    /**
     * Limit write rate (bytes per second) to a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @var ThrottleDevice[]
     */
    protected $blkioDeviceWriteBps;
    /**
     * Limit read rate (IO per second) from a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @var ThrottleDevice[]
     */
    protected $blkioDeviceReadIOps;
    /**
     * Limit write rate (IO per second) to a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @var ThrottleDevice[]
     */
    protected $blkioDeviceWriteIOps;
    /**
     * The length of a CPU period in microseconds.
     *
     * @var int
     */
    protected $cpuPeriod;
    /**
     * Microseconds of CPU time that the container can get in a CPU period.
     *
     * @var int
     */
    protected $cpuQuota;
    /**
     * The length of a CPU real-time period in microseconds. Set to 0 to allocate no time allocated to real-time tasks.
     *
     * @var int
     */
    protected $cpuRealtimePeriod;
    /**
     * The length of a CPU real-time runtime in microseconds. Set to 0 to allocate no time allocated to real-time tasks.
     *
     * @var int
     */
    protected $cpuRealtimeRuntime;
    /**
     * CPUs in which to allow execution (e.g., `0-3`, `0,1`).
     *
     * @var string
     */
    protected $cpusetCpus;
    /**
     * Memory nodes (MEMs) in which to allow execution (0-3, 0,1). Only effective on NUMA systems.
     *
     * @var string
     */
    protected $cpusetMems;
    /**
     * A list of devices to add to the container.
     *
     * @var DeviceMapping[]
     */
    protected $devices;
    /**
     * a list of cgroup rules to apply to the container.
     *
     * @var string[]
     */
    protected $deviceCgroupRules;
    /**
     * Disk limit (in bytes).
     *
     * @var int
     */
    protected $diskQuota;
    /**
     * Kernel memory limit in bytes.
     *
     * @var int
     */
    protected $kernelMemory;
    /**
     * Memory soft limit in bytes.
     *
     * @var int
     */
    protected $memoryReservation;
    /**
     * Total memory limit (memory + swap). Set as `-1` to enable unlimited swap.
     *
     * @var int
     */
    protected $memorySwap;
    /**
     * Tune a container's memory swappiness behavior. Accepts an integer between 0 and 100.
     *
     * @var int
     */
    protected $memorySwappiness;
    /**
     * CPU quota in units of 10<sup>-9</sup> CPUs.
     *
     * @var int
     */
    protected $nanoCPUs;
    /**
     * Disable OOM Killer for the container.
     *
     * @var bool
     */
    protected $oomKillDisable;
    /**
     * Tune a container's pids limit. Set -1 for unlimited.
     *
     * @var int
     */
    protected $pidsLimit;
    /**
     * A list of resource limits to set in the container. For example: `{"Name": "nofile", "Soft": 1024, "Hard": 2048}`".
     *
     * @var ResourcesUlimitsItem[]
     */
    protected $ulimits;
    /**
     * The number of usable CPUs (Windows only).
     *
     * On Windows Server containers, the processor resource controls are mutually exclusive. The order of precedence is `CPUCount` first, then `CPUShares`, and `CPUPercent` last.
     *
     * @var int
     */
    protected $cpuCount;
    /**
     * The usable percentage of the available CPUs (Windows only).
     *
     * On Windows Server containers, the processor resource controls are mutually exclusive. The order of precedence is `CPUCount` first, then `CPUShares`, and `CPUPercent` last.
     *
     * @var int
     */
    protected $cpuPercent;
    /**
     * Maximum IOps for the container system drive (Windows only).
     *
     * @var int
     */
    protected $iOMaximumIOps;
    /**
     * Maximum IO in bytes per second for the container system drive (Windows only).
     *
     * @var int
     */
    protected $iOMaximumBandwidth;
    /**
     * A list of volume bindings for this container. Each volume binding is a string in one of these forms:.
     *
     * - `host-src:container-dest` to bind-mount a host path into the container. Both `host-src`, and `container-dest` must be an _absolute_ path.
     * - `host-src:container-dest:ro` to make the bind mount read-only inside the container. Both `host-src`, and `container-dest` must be an _absolute_ path.
     * - `volume-name:container-dest` to bind-mount a volume managed by a volume driver into the container. `container-dest` must be an _absolute_ path.
     * - `volume-name:container-dest:ro` to mount the volume read-only inside the container.  `container-dest` must be an _absolute_ path.
     *
     * @var string[]
     */
    protected $binds;
    /**
     * Path to a file where the container ID is written.
     *
     * @var string
     */
    protected $containerIDFile;
    /**
     * The logging configuration for this container.
     *
     * @var HostConfigLogConfig
     */
    protected $logConfig;
    /**
     * Network mode to use for this container. Supported standard values are: `bridge`, `host`, `none`, and `container:<name|id>`. Any other value is taken as a custom network's name to which this container should connect to.
     *
     * @var string
     */
    protected $networkMode;
    /**
     * PortMap describes the mapping of container ports to host ports, using the.
     * container's port-number and protocol as key in the format `<port>/<protocol>`,
     * for example, `80/udp`.
     *
     * If a container's port is mapped for both `tcp` and `udp`, two separate
     * entries are added to the mapping table.
     *
     * @var PortBinding[][]
     */
    protected $portBindings;
    /**
     * The behavior to apply when the container exits. The default is not to restart.
     *
     * An ever increasing delay (double the previous delay, starting at 100ms) is added before each restart to prevent flooding the server.
     *
     * @var RestartPolicy
     */
    protected $restartPolicy;
    /**
     * Automatically remove the container when the container's process exits. This has no effect if `RestartPolicy` is set.
     *
     * @var bool
     */
    protected $autoRemove;
    /**
     * Driver that this container uses to mount volumes.
     *
     * @var string
     */
    protected $volumeDriver;
    /**
     * A list of volumes to inherit from another container, specified in the form `<container name>[:<ro|rw>]`.
     *
     * @var string[]
     */
    protected $volumesFrom;
    /**
     * Specification for mounts to be added to the container.
     *
     * @var Mount[]
     */
    protected $mounts;
    /**
     * A list of kernel capabilities to add to the container.
     *
     * @var string[]
     */
    protected $capAdd;
    /**
     * A list of kernel capabilities to drop from the container.
     *
     * @var string[]
     */
    protected $capDrop;
    /**
     * A list of DNS servers for the container to use.
     *
     * @var string[]
     */
    protected $dns;
    /**
     * A list of DNS options.
     *
     * @var string[]
     */
    protected $dnsOptions;
    /**
     * A list of DNS search domains.
     *
     * @var string[]
     */
    protected $dnsSearch;
    /**
     * A list of hostnames/IP mappings to add to the container's `/etc/hosts` file. Specified in the form `["hostname:IP"]`.
     *
     * @var string[]
     */
    protected $extraHosts;
    /**
     * A list of additional groups that the container process will run as.
     *
     * @var string[]
     */
    protected $groupAdd;
    /**
     * IPC sharing mode for the container. Possible values are:.
     *
     * - `"none"`: own private IPC namespace, with /dev/shm not mounted
     * - `"private"`: own private IPC namespace
     * - `"shareable"`: own private IPC namespace, with a possibility to share it with other containers
     * - `"container:<name|id>"`: join another (shareable) container's IPC namespace
     * - `"host"`: use the host system's IPC namespace
     *
     * If not specified, daemon default is used, which can either be `"private"`
     * or `"shareable"`, depending on daemon version and configuration.
     *
     * @var string
     */
    protected $ipcMode;
    /**
     * Cgroup to use for the container.
     *
     * @var string
     */
    protected $cgroup;
    /**
     * A list of links for the container in the form `container_name:alias`.
     *
     * @var string[]
     */
    protected $links;
    /**
     * An integer value containing the score given to the container in order to tune OOM killer preferences.
     *
     * @var int
     */
    protected $oomScoreAdj;
    /**
     * Set the PID (Process) Namespace mode for the container. It can be either:.
     *
     * - `"container:<name|id>"`: joins another container's PID namespace
     * - `"host"`: use the host's PID namespace inside the container
     *
     * @var string
     */
    protected $pidMode;
    /**
     * Gives the container full access to the host.
     *
     * @var bool
     */
    protected $privileged;
    /**
     * Allocates an ephemeral host port for all of a container's.
     * exposed ports.
     *
     * Ports are de-allocated when the container stops and allocated when the container starts.
     * The allocated port might be changed when restarting the container.
     *
     * The port is selected from the ephemeral port range that depends on the kernel.
     * For example, on Linux the range is defined by `/proc/sys/net/ipv4/ip_local_port_range`.
     *
     * @var bool
     */
    protected $publishAllPorts;
    /**
     * Mount the container's root filesystem as read only.
     *
     * @var bool
     */
    protected $readonlyRootfs;
    /**
     * A list of string values to customize labels for MLS systems, such as SELinux.
     *
     * @var string[]
     */
    protected $securityOpt;
    /**
     * Storage driver options for this container, in the form `{"size": "120G"}`.
     *
     * @var string[]
     */
    protected $storageOpt;
    /**
     * A map of container directories which should be replaced by tmpfs mounts, and their corresponding mount options. For example: `{ "/run": "rw,noexec,nosuid,size=65536k" }`.
     *
     * @var string[]
     */
    protected $tmpfs;
    /**
     * UTS namespace to use for the container.
     *
     * @var string
     */
    protected $uTSMode;
    /**
     * Sets the usernamespace mode for the container when usernamespace remapping option is enabled.
     *
     * @var string
     */
    protected $usernsMode;
    /**
     * Size of `/dev/shm` in bytes. If omitted, the system uses 64MB.
     *
     * @var int
     */
    protected $shmSize;
    /**
     * A list of kernel parameters (sysctls) to set in the container. For example: `{"net.ipv4.ip_forward": "1"}`.
     *
     * @var string[]
     */
    protected $sysctls;
    /**
     * Runtime to use with this container.
     *
     * @var string
     */
    protected $runtime;
    /**
     * Initial console size, as an `[height, width]` array. (Windows only).
     *
     * @var int[]
     */
    protected $consoleSize;
    /**
     * Isolation technology of the container. (Windows only).
     *
     * @var string
     */
    protected $isolation;

    /**
     * An integer value representing this container's relative CPU weight versus other containers.
     */
    public function getCpuShares(): int
    {
        return $this->cpuShares;
    }

    /**
     * An integer value representing this container's relative CPU weight versus other containers.
     */
    public function setCpuShares(int $cpuShares): self
    {
        $this->cpuShares = $cpuShares;

        return $this;
    }

    /**
     * Memory limit in bytes.
     */
    public function getMemory(): int
    {
        return $this->memory;
    }

    /**
     * Memory limit in bytes.
     */
    public function setMemory(int $memory): self
    {
        $this->memory = $memory;

        return $this;
    }

    /**
     * Path to `cgroups` under which the container's `cgroup` is created. If the path is not absolute, the path is considered to be relative to the `cgroups` path of the init process. Cgroups are created if they do not already exist.
     */
    public function getCgroupParent(): string
    {
        return $this->cgroupParent;
    }

    /**
     * Path to `cgroups` under which the container's `cgroup` is created. If the path is not absolute, the path is considered to be relative to the `cgroups` path of the init process. Cgroups are created if they do not already exist.
     */
    public function setCgroupParent(string $cgroupParent): self
    {
        $this->cgroupParent = $cgroupParent;

        return $this;
    }

    /**
     * Block IO weight (relative weight).
     */
    public function getBlkioWeight(): int
    {
        return $this->blkioWeight;
    }

    /**
     * Block IO weight (relative weight).
     */
    public function setBlkioWeight(int $blkioWeight): self
    {
        $this->blkioWeight = $blkioWeight;

        return $this;
    }

    /**
     * Block IO weight (relative device weight) in the form `[{"Path": "device_path", "Weight": weight}]`.
     *
     * @return ResourcesBlkioWeightDeviceItem[]
     */
    public function getBlkioWeightDevice(): array
    {
        return $this->blkioWeightDevice;
    }

    /**
     * Block IO weight (relative device weight) in the form `[{"Path": "device_path", "Weight": weight}]`.
     *
     * @param ResourcesBlkioWeightDeviceItem[] $blkioWeightDevice
     */
    public function setBlkioWeightDevice(array $blkioWeightDevice): self
    {
        $this->blkioWeightDevice = $blkioWeightDevice;

        return $this;
    }

    /**
     * Limit read rate (bytes per second) from a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @return ThrottleDevice[]
     */
    public function getBlkioDeviceReadBps(): array
    {
        return $this->blkioDeviceReadBps;
    }

    /**
     * Limit read rate (bytes per second) from a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @param ThrottleDevice[] $blkioDeviceReadBps
     */
    public function setBlkioDeviceReadBps(array $blkioDeviceReadBps): self
    {
        $this->blkioDeviceReadBps = $blkioDeviceReadBps;

        return $this;
    }

    /**
     * Limit write rate (bytes per second) to a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @return ThrottleDevice[]
     */
    public function getBlkioDeviceWriteBps(): array
    {
        return $this->blkioDeviceWriteBps;
    }

    /**
     * Limit write rate (bytes per second) to a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @param ThrottleDevice[] $blkioDeviceWriteBps
     */
    public function setBlkioDeviceWriteBps(array $blkioDeviceWriteBps): self
    {
        $this->blkioDeviceWriteBps = $blkioDeviceWriteBps;

        return $this;
    }

    /**
     * Limit read rate (IO per second) from a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @return ThrottleDevice[]
     */
    public function getBlkioDeviceReadIOps(): array
    {
        return $this->blkioDeviceReadIOps;
    }

    /**
     * Limit read rate (IO per second) from a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @param ThrottleDevice[] $blkioDeviceReadIOps
     */
    public function setBlkioDeviceReadIOps(array $blkioDeviceReadIOps): self
    {
        $this->blkioDeviceReadIOps = $blkioDeviceReadIOps;

        return $this;
    }

    /**
     * Limit write rate (IO per second) to a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @return ThrottleDevice[]
     */
    public function getBlkioDeviceWriteIOps(): array
    {
        return $this->blkioDeviceWriteIOps;
    }

    /**
     * Limit write rate (IO per second) to a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @param ThrottleDevice[] $blkioDeviceWriteIOps
     */
    public function setBlkioDeviceWriteIOps(array $blkioDeviceWriteIOps): self
    {
        $this->blkioDeviceWriteIOps = $blkioDeviceWriteIOps;

        return $this;
    }

    /**
     * The length of a CPU period in microseconds.
     */
    public function getCpuPeriod(): int
    {
        return $this->cpuPeriod;
    }

    /**
     * The length of a CPU period in microseconds.
     */
    public function setCpuPeriod(int $cpuPeriod): self
    {
        $this->cpuPeriod = $cpuPeriod;

        return $this;
    }

    /**
     * Microseconds of CPU time that the container can get in a CPU period.
     */
    public function getCpuQuota(): int
    {
        return $this->cpuQuota;
    }

    /**
     * Microseconds of CPU time that the container can get in a CPU period.
     */
    public function setCpuQuota(int $cpuQuota): self
    {
        $this->cpuQuota = $cpuQuota;

        return $this;
    }

    /**
     * The length of a CPU real-time period in microseconds. Set to 0 to allocate no time allocated to real-time tasks.
     */
    public function getCpuRealtimePeriod(): int
    {
        return $this->cpuRealtimePeriod;
    }

    /**
     * The length of a CPU real-time period in microseconds. Set to 0 to allocate no time allocated to real-time tasks.
     */
    public function setCpuRealtimePeriod(int $cpuRealtimePeriod): self
    {
        $this->cpuRealtimePeriod = $cpuRealtimePeriod;

        return $this;
    }

    /**
     * The length of a CPU real-time runtime in microseconds. Set to 0 to allocate no time allocated to real-time tasks.
     */
    public function getCpuRealtimeRuntime(): int
    {
        return $this->cpuRealtimeRuntime;
    }

    /**
     * The length of a CPU real-time runtime in microseconds. Set to 0 to allocate no time allocated to real-time tasks.
     */
    public function setCpuRealtimeRuntime(int $cpuRealtimeRuntime): self
    {
        $this->cpuRealtimeRuntime = $cpuRealtimeRuntime;

        return $this;
    }

    /**
     * CPUs in which to allow execution (e.g., `0-3`, `0,1`).
     */
    public function getCpusetCpus(): string
    {
        return $this->cpusetCpus;
    }

    /**
     * CPUs in which to allow execution (e.g., `0-3`, `0,1`).
     */
    public function setCpusetCpus(string $cpusetCpus): self
    {
        $this->cpusetCpus = $cpusetCpus;

        return $this;
    }

    /**
     * Memory nodes (MEMs) in which to allow execution (0-3, 0,1). Only effective on NUMA systems.
     */
    public function getCpusetMems(): string
    {
        return $this->cpusetMems;
    }

    /**
     * Memory nodes (MEMs) in which to allow execution (0-3, 0,1). Only effective on NUMA systems.
     */
    public function setCpusetMems(string $cpusetMems): self
    {
        $this->cpusetMems = $cpusetMems;

        return $this;
    }

    /**
     * A list of devices to add to the container.
     *
     * @return DeviceMapping[]
     */
    public function getDevices(): array
    {
        return $this->devices;
    }

    /**
     * A list of devices to add to the container.
     *
     * @param DeviceMapping[] $devices
     */
    public function setDevices(array $devices): self
    {
        $this->devices = $devices;

        return $this;
    }

    /**
     * a list of cgroup rules to apply to the container.
     *
     * @return string[]
     */
    public function getDeviceCgroupRules(): array
    {
        return $this->deviceCgroupRules;
    }

    /**
     * a list of cgroup rules to apply to the container.
     *
     * @param string[] $deviceCgroupRules
     */
    public function setDeviceCgroupRules(array $deviceCgroupRules): self
    {
        $this->deviceCgroupRules = $deviceCgroupRules;

        return $this;
    }

    /**
     * Disk limit (in bytes).
     */
    public function getDiskQuota(): int
    {
        return $this->diskQuota;
    }

    /**
     * Disk limit (in bytes).
     */
    public function setDiskQuota(int $diskQuota): self
    {
        $this->diskQuota = $diskQuota;

        return $this;
    }

    /**
     * Kernel memory limit in bytes.
     */
    public function getKernelMemory(): int
    {
        return $this->kernelMemory;
    }

    /**
     * Kernel memory limit in bytes.
     */
    public function setKernelMemory(int $kernelMemory): self
    {
        $this->kernelMemory = $kernelMemory;

        return $this;
    }

    /**
     * Memory soft limit in bytes.
     */
    public function getMemoryReservation(): int
    {
        return $this->memoryReservation;
    }

    /**
     * Memory soft limit in bytes.
     */
    public function setMemoryReservation(int $memoryReservation): self
    {
        $this->memoryReservation = $memoryReservation;

        return $this;
    }

    /**
     * Total memory limit (memory + swap). Set as `-1` to enable unlimited swap.
     */
    public function getMemorySwap(): int
    {
        return $this->memorySwap;
    }

    /**
     * Total memory limit (memory + swap). Set as `-1` to enable unlimited swap.
     */
    public function setMemorySwap(int $memorySwap): self
    {
        $this->memorySwap = $memorySwap;

        return $this;
    }

    /**
     * Tune a container's memory swappiness behavior. Accepts an integer between 0 and 100.
     */
    public function getMemorySwappiness(): int
    {
        return $this->memorySwappiness;
    }

    /**
     * Tune a container's memory swappiness behavior. Accepts an integer between 0 and 100.
     */
    public function setMemorySwappiness(int $memorySwappiness): self
    {
        $this->memorySwappiness = $memorySwappiness;

        return $this;
    }

    /**
     * CPU quota in units of 10<sup>-9</sup> CPUs.
     */
    public function getNanoCPUs(): int
    {
        return $this->nanoCPUs;
    }

    /**
     * CPU quota in units of 10<sup>-9</sup> CPUs.
     */
    public function setNanoCPUs(int $nanoCPUs): self
    {
        $this->nanoCPUs = $nanoCPUs;

        return $this;
    }

    /**
     * Disable OOM Killer for the container.
     */
    public function getOomKillDisable(): bool
    {
        return $this->oomKillDisable;
    }

    /**
     * Disable OOM Killer for the container.
     */
    public function setOomKillDisable(bool $oomKillDisable): self
    {
        $this->oomKillDisable = $oomKillDisable;

        return $this;
    }

    /**
     * Tune a container's pids limit. Set -1 for unlimited.
     */
    public function getPidsLimit(): int
    {
        return $this->pidsLimit;
    }

    /**
     * Tune a container's pids limit. Set -1 for unlimited.
     */
    public function setPidsLimit(int $pidsLimit): self
    {
        $this->pidsLimit = $pidsLimit;

        return $this;
    }

    /**
     * A list of resource limits to set in the container. For example: `{"Name": "nofile", "Soft": 1024, "Hard": 2048}`".
     *
     * @return ResourcesUlimitsItem[]
     */
    public function getUlimits(): array
    {
        return $this->ulimits;
    }

    /**
     * A list of resource limits to set in the container. For example: `{"Name": "nofile", "Soft": 1024, "Hard": 2048}`".
     *
     * @param ResourcesUlimitsItem[] $ulimits
     */
    public function setUlimits(array $ulimits): self
    {
        $this->ulimits = $ulimits;

        return $this;
    }

    /**
     * The number of usable CPUs (Windows only).
     *
     * On Windows Server containers, the processor resource controls are mutually exclusive. The order of precedence is `CPUCount` first, then `CPUShares`, and `CPUPercent` last.
     */
    public function getCpuCount(): int
    {
        return $this->cpuCount;
    }

    /**
     * The number of usable CPUs (Windows only).
     *
     * On Windows Server containers, the processor resource controls are mutually exclusive. The order of precedence is `CPUCount` first, then `CPUShares`, and `CPUPercent` last.
     */
    public function setCpuCount(int $cpuCount): self
    {
        $this->cpuCount = $cpuCount;

        return $this;
    }

    /**
     * The usable percentage of the available CPUs (Windows only).
     *
     * On Windows Server containers, the processor resource controls are mutually exclusive. The order of precedence is `CPUCount` first, then `CPUShares`, and `CPUPercent` last.
     */
    public function getCpuPercent(): int
    {
        return $this->cpuPercent;
    }

    /**
     * The usable percentage of the available CPUs (Windows only).
     *
     * On Windows Server containers, the processor resource controls are mutually exclusive. The order of precedence is `CPUCount` first, then `CPUShares`, and `CPUPercent` last.
     */
    public function setCpuPercent(int $cpuPercent): self
    {
        $this->cpuPercent = $cpuPercent;

        return $this;
    }

    /**
     * Maximum IOps for the container system drive (Windows only).
     */
    public function getIOMaximumIOps(): int
    {
        return $this->iOMaximumIOps;
    }

    /**
     * Maximum IOps for the container system drive (Windows only).
     */
    public function setIOMaximumIOps(int $iOMaximumIOps): self
    {
        $this->iOMaximumIOps = $iOMaximumIOps;

        return $this;
    }

    /**
     * Maximum IO in bytes per second for the container system drive (Windows only).
     */
    public function getIOMaximumBandwidth(): int
    {
        return $this->iOMaximumBandwidth;
    }

    /**
     * Maximum IO in bytes per second for the container system drive (Windows only).
     */
    public function setIOMaximumBandwidth(int $iOMaximumBandwidth): self
    {
        $this->iOMaximumBandwidth = $iOMaximumBandwidth;

        return $this;
    }

    /**
     * A list of volume bindings for this container. Each volume binding is a string in one of these forms:.
     *
     * - `host-src:container-dest` to bind-mount a host path into the container. Both `host-src`, and `container-dest` must be an _absolute_ path.
     * - `host-src:container-dest:ro` to make the bind mount read-only inside the container. Both `host-src`, and `container-dest` must be an _absolute_ path.
     * - `volume-name:container-dest` to bind-mount a volume managed by a volume driver into the container. `container-dest` must be an _absolute_ path.
     * - `volume-name:container-dest:ro` to mount the volume read-only inside the container.  `container-dest` must be an _absolute_ path.
     *
     * @return string[]
     */
    public function getBinds(): array
    {
        return $this->binds;
    }

    /**
     * A list of volume bindings for this container. Each volume binding is a string in one of these forms:.
     *
     * - `host-src:container-dest` to bind-mount a host path into the container. Both `host-src`, and `container-dest` must be an _absolute_ path.
     * - `host-src:container-dest:ro` to make the bind mount read-only inside the container. Both `host-src`, and `container-dest` must be an _absolute_ path.
     * - `volume-name:container-dest` to bind-mount a volume managed by a volume driver into the container. `container-dest` must be an _absolute_ path.
     * - `volume-name:container-dest:ro` to mount the volume read-only inside the container.  `container-dest` must be an _absolute_ path.
     *
     * @param string[] $binds
     */
    public function setBinds(array $binds): self
    {
        $this->binds = $binds;

        return $this;
    }

    /**
     * Path to a file where the container ID is written.
     */
    public function getContainerIDFile(): string
    {
        return $this->containerIDFile;
    }

    /**
     * Path to a file where the container ID is written.
     */
    public function setContainerIDFile(string $containerIDFile): self
    {
        $this->containerIDFile = $containerIDFile;

        return $this;
    }

    /**
     * The logging configuration for this container.
     */
    public function getLogConfig(): HostConfigLogConfig
    {
        return $this->logConfig;
    }

    /**
     * The logging configuration for this container.
     */
    public function setLogConfig(HostConfigLogConfig $logConfig): self
    {
        $this->logConfig = $logConfig;

        return $this;
    }

    /**
     * Network mode to use for this container. Supported standard values are: `bridge`, `host`, `none`, and `container:<name|id>`. Any other value is taken as a custom network's name to which this container should connect to.
     */
    public function getNetworkMode(): string
    {
        return $this->networkMode;
    }

    /**
     * Network mode to use for this container. Supported standard values are: `bridge`, `host`, `none`, and `container:<name|id>`. Any other value is taken as a custom network's name to which this container should connect to.
     */
    public function setNetworkMode(string $networkMode): self
    {
        $this->networkMode = $networkMode;

        return $this;
    }

    /**
     * PortMap describes the mapping of container ports to host ports, using the.
     * container's port-number and protocol as key in the format `<port>/<protocol>`,
     * for example, `80/udp`.
     *
     * If a container's port is mapped for both `tcp` and `udp`, two separate
     * entries are added to the mapping table.
     *
     * @return PortBinding[][]
     */
    public function getPortBindings(): iterable
    {
        return $this->portBindings;
    }

    /**
     * PortMap describes the mapping of container ports to host ports, using the.
     * container's port-number and protocol as key in the format `<port>/<protocol>`,
     * for example, `80/udp`.
     *
     * If a container's port is mapped for both `tcp` and `udp`, two separate
     * entries are added to the mapping table.
     *
     * @param PortBinding[][] $portBindings
     */
    public function setPortBindings(iterable $portBindings): self
    {
        $this->portBindings = $portBindings;

        return $this;
    }

    /**
     * The behavior to apply when the container exits. The default is not to restart.
     *
     * An ever increasing delay (double the previous delay, starting at 100ms) is added before each restart to prevent flooding the server.
     */
    public function getRestartPolicy(): RestartPolicy
    {
        return $this->restartPolicy;
    }

    /**
     * The behavior to apply when the container exits. The default is not to restart.
     *
     * An ever increasing delay (double the previous delay, starting at 100ms) is added before each restart to prevent flooding the server.
     */
    public function setRestartPolicy(RestartPolicy $restartPolicy): self
    {
        $this->restartPolicy = $restartPolicy;

        return $this;
    }

    /**
     * Automatically remove the container when the container's process exits. This has no effect if `RestartPolicy` is set.
     */
    public function getAutoRemove(): bool
    {
        return $this->autoRemove;
    }

    /**
     * Automatically remove the container when the container's process exits. This has no effect if `RestartPolicy` is set.
     */
    public function setAutoRemove(bool $autoRemove): self
    {
        $this->autoRemove = $autoRemove;

        return $this;
    }

    /**
     * Driver that this container uses to mount volumes.
     */
    public function getVolumeDriver(): string
    {
        return $this->volumeDriver;
    }

    /**
     * Driver that this container uses to mount volumes.
     */
    public function setVolumeDriver(string $volumeDriver): self
    {
        $this->volumeDriver = $volumeDriver;

        return $this;
    }

    /**
     * A list of volumes to inherit from another container, specified in the form `<container name>[:<ro|rw>]`.
     *
     * @return string[]
     */
    public function getVolumesFrom(): array
    {
        return $this->volumesFrom;
    }

    /**
     * A list of volumes to inherit from another container, specified in the form `<container name>[:<ro|rw>]`.
     *
     * @param string[] $volumesFrom
     */
    public function setVolumesFrom(array $volumesFrom): self
    {
        $this->volumesFrom = $volumesFrom;

        return $this;
    }

    /**
     * Specification for mounts to be added to the container.
     *
     * @return Mount[]
     */
    public function getMounts(): array
    {
        return $this->mounts;
    }

    /**
     * Specification for mounts to be added to the container.
     *
     * @param Mount[] $mounts
     */
    public function setMounts(array $mounts): self
    {
        $this->mounts = $mounts;

        return $this;
    }

    /**
     * A list of kernel capabilities to add to the container.
     *
     * @return string[]
     */
    public function getCapAdd(): array
    {
        return $this->capAdd;
    }

    /**
     * A list of kernel capabilities to add to the container.
     *
     * @param string[] $capAdd
     */
    public function setCapAdd(array $capAdd): self
    {
        $this->capAdd = $capAdd;

        return $this;
    }

    /**
     * A list of kernel capabilities to drop from the container.
     *
     * @return string[]
     */
    public function getCapDrop(): array
    {
        return $this->capDrop;
    }

    /**
     * A list of kernel capabilities to drop from the container.
     *
     * @param string[] $capDrop
     */
    public function setCapDrop(array $capDrop): self
    {
        $this->capDrop = $capDrop;

        return $this;
    }

    /**
     * A list of DNS servers for the container to use.
     *
     * @return string[]
     */
    public function getDns(): array
    {
        return $this->dns;
    }

    /**
     * A list of DNS servers for the container to use.
     *
     * @param string[] $dns
     */
    public function setDns(array $dns): self
    {
        $this->dns = $dns;

        return $this;
    }

    /**
     * A list of DNS options.
     *
     * @return string[]
     */
    public function getDnsOptions(): array
    {
        return $this->dnsOptions;
    }

    /**
     * A list of DNS options.
     *
     * @param string[] $dnsOptions
     */
    public function setDnsOptions(array $dnsOptions): self
    {
        $this->dnsOptions = $dnsOptions;

        return $this;
    }

    /**
     * A list of DNS search domains.
     *
     * @return string[]
     */
    public function getDnsSearch(): array
    {
        return $this->dnsSearch;
    }

    /**
     * A list of DNS search domains.
     *
     * @param string[] $dnsSearch
     */
    public function setDnsSearch(array $dnsSearch): self
    {
        $this->dnsSearch = $dnsSearch;

        return $this;
    }

    /**
     * A list of hostnames/IP mappings to add to the container's `/etc/hosts` file. Specified in the form `["hostname:IP"]`.
     *
     * @return string[]
     */
    public function getExtraHosts(): array
    {
        return $this->extraHosts;
    }

    /**
     * A list of hostnames/IP mappings to add to the container's `/etc/hosts` file. Specified in the form `["hostname:IP"]`.
     *
     * @param string[] $extraHosts
     */
    public function setExtraHosts(array $extraHosts): self
    {
        $this->extraHosts = $extraHosts;

        return $this;
    }

    /**
     * A list of additional groups that the container process will run as.
     *
     * @return string[]
     */
    public function getGroupAdd(): array
    {
        return $this->groupAdd;
    }

    /**
     * A list of additional groups that the container process will run as.
     *
     * @param string[] $groupAdd
     */
    public function setGroupAdd(array $groupAdd): self
    {
        $this->groupAdd = $groupAdd;

        return $this;
    }

    /**
     * IPC sharing mode for the container. Possible values are:.
     *
     * - `"none"`: own private IPC namespace, with /dev/shm not mounted
     * - `"private"`: own private IPC namespace
     * - `"shareable"`: own private IPC namespace, with a possibility to share it with other containers
     * - `"container:<name|id>"`: join another (shareable) container's IPC namespace
     * - `"host"`: use the host system's IPC namespace
     *
     * If not specified, daemon default is used, which can either be `"private"`
     * or `"shareable"`, depending on daemon version and configuration.
     */
    public function getIpcMode(): string
    {
        return $this->ipcMode;
    }

    /**
     * IPC sharing mode for the container. Possible values are:.
     *
     * - `"none"`: own private IPC namespace, with /dev/shm not mounted
     * - `"private"`: own private IPC namespace
     * - `"shareable"`: own private IPC namespace, with a possibility to share it with other containers
     * - `"container:<name|id>"`: join another (shareable) container's IPC namespace
     * - `"host"`: use the host system's IPC namespace
     *
     * If not specified, daemon default is used, which can either be `"private"`
     * or `"shareable"`, depending on daemon version and configuration.
     */
    public function setIpcMode(string $ipcMode): self
    {
        $this->ipcMode = $ipcMode;

        return $this;
    }

    /**
     * Cgroup to use for the container.
     */
    public function getCgroup(): string
    {
        return $this->cgroup;
    }

    /**
     * Cgroup to use for the container.
     */
    public function setCgroup(string $cgroup): self
    {
        $this->cgroup = $cgroup;

        return $this;
    }

    /**
     * A list of links for the container in the form `container_name:alias`.
     *
     * @return string[]
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * A list of links for the container in the form `container_name:alias`.
     *
     * @param string[] $links
     */
    public function setLinks(array $links): self
    {
        $this->links = $links;

        return $this;
    }

    /**
     * An integer value containing the score given to the container in order to tune OOM killer preferences.
     */
    public function getOomScoreAdj(): int
    {
        return $this->oomScoreAdj;
    }

    /**
     * An integer value containing the score given to the container in order to tune OOM killer preferences.
     */
    public function setOomScoreAdj(int $oomScoreAdj): self
    {
        $this->oomScoreAdj = $oomScoreAdj;

        return $this;
    }

    /**
     * Set the PID (Process) Namespace mode for the container. It can be either:.
     *
     * - `"container:<name|id>"`: joins another container's PID namespace
     * - `"host"`: use the host's PID namespace inside the container
     */
    public function getPidMode(): string
    {
        return $this->pidMode;
    }

    /**
     * Set the PID (Process) Namespace mode for the container. It can be either:.
     *
     * - `"container:<name|id>"`: joins another container's PID namespace
     * - `"host"`: use the host's PID namespace inside the container
     */
    public function setPidMode(string $pidMode): self
    {
        $this->pidMode = $pidMode;

        return $this;
    }

    /**
     * Gives the container full access to the host.
     */
    public function getPrivileged(): bool
    {
        return $this->privileged;
    }

    /**
     * Gives the container full access to the host.
     */
    public function setPrivileged(bool $privileged): self
    {
        $this->privileged = $privileged;

        return $this;
    }

    /**
     * Allocates an ephemeral host port for all of a container's.
     * exposed ports.
     *
     * Ports are de-allocated when the container stops and allocated when the container starts.
     * The allocated port might be changed when restarting the container.
     *
     * The port is selected from the ephemeral port range that depends on the kernel.
     * For example, on Linux the range is defined by `/proc/sys/net/ipv4/ip_local_port_range`.
     */
    public function getPublishAllPorts(): bool
    {
        return $this->publishAllPorts;
    }

    /**
     * Allocates an ephemeral host port for all of a container's.
     * exposed ports.
     *
     * Ports are de-allocated when the container stops and allocated when the container starts.
     * The allocated port might be changed when restarting the container.
     *
     * The port is selected from the ephemeral port range that depends on the kernel.
     * For example, on Linux the range is defined by `/proc/sys/net/ipv4/ip_local_port_range`.
     */
    public function setPublishAllPorts(bool $publishAllPorts): self
    {
        $this->publishAllPorts = $publishAllPorts;

        return $this;
    }

    /**
     * Mount the container's root filesystem as read only.
     */
    public function getReadonlyRootfs(): bool
    {
        return $this->readonlyRootfs;
    }

    /**
     * Mount the container's root filesystem as read only.
     */
    public function setReadonlyRootfs(bool $readonlyRootfs): self
    {
        $this->readonlyRootfs = $readonlyRootfs;

        return $this;
    }

    /**
     * A list of string values to customize labels for MLS systems, such as SELinux.
     *
     * @return string[]
     */
    public function getSecurityOpt(): array
    {
        return $this->securityOpt;
    }

    /**
     * A list of string values to customize labels for MLS systems, such as SELinux.
     *
     * @param string[] $securityOpt
     */
    public function setSecurityOpt(array $securityOpt): self
    {
        $this->securityOpt = $securityOpt;

        return $this;
    }

    /**
     * Storage driver options for this container, in the form `{"size": "120G"}`.
     *
     * @return string[]
     */
    public function getStorageOpt(): iterable
    {
        return $this->storageOpt;
    }

    /**
     * Storage driver options for this container, in the form `{"size": "120G"}`.
     *
     * @param string[] $storageOpt
     */
    public function setStorageOpt(iterable $storageOpt): self
    {
        $this->storageOpt = $storageOpt;

        return $this;
    }

    /**
     * A map of container directories which should be replaced by tmpfs mounts, and their corresponding mount options. For example: `{ "/run": "rw,noexec,nosuid,size=65536k" }`.
     *
     * @return string[]
     */
    public function getTmpfs(): iterable
    {
        return $this->tmpfs;
    }

    /**
     * A map of container directories which should be replaced by tmpfs mounts, and their corresponding mount options. For example: `{ "/run": "rw,noexec,nosuid,size=65536k" }`.
     *
     * @param string[] $tmpfs
     */
    public function setTmpfs(iterable $tmpfs): self
    {
        $this->tmpfs = $tmpfs;

        return $this;
    }

    /**
     * UTS namespace to use for the container.
     */
    public function getUTSMode(): string
    {
        return $this->uTSMode;
    }

    /**
     * UTS namespace to use for the container.
     */
    public function setUTSMode(string $uTSMode): self
    {
        $this->uTSMode = $uTSMode;

        return $this;
    }

    /**
     * Sets the usernamespace mode for the container when usernamespace remapping option is enabled.
     */
    public function getUsernsMode(): string
    {
        return $this->usernsMode;
    }

    /**
     * Sets the usernamespace mode for the container when usernamespace remapping option is enabled.
     */
    public function setUsernsMode(string $usernsMode): self
    {
        $this->usernsMode = $usernsMode;

        return $this;
    }

    /**
     * Size of `/dev/shm` in bytes. If omitted, the system uses 64MB.
     */
    public function getShmSize(): int
    {
        return $this->shmSize;
    }

    /**
     * Size of `/dev/shm` in bytes. If omitted, the system uses 64MB.
     */
    public function setShmSize(int $shmSize): self
    {
        $this->shmSize = $shmSize;

        return $this;
    }

    /**
     * A list of kernel parameters (sysctls) to set in the container. For example: `{"net.ipv4.ip_forward": "1"}`.
     *
     * @return string[]
     */
    public function getSysctls(): iterable
    {
        return $this->sysctls;
    }

    /**
     * A list of kernel parameters (sysctls) to set in the container. For example: `{"net.ipv4.ip_forward": "1"}`.
     *
     * @param string[] $sysctls
     */
    public function setSysctls(iterable $sysctls): self
    {
        $this->sysctls = $sysctls;

        return $this;
    }

    /**
     * Runtime to use with this container.
     */
    public function getRuntime(): string
    {
        return $this->runtime;
    }

    /**
     * Runtime to use with this container.
     */
    public function setRuntime(string $runtime): self
    {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * Initial console size, as an `[height, width]` array. (Windows only).
     *
     * @return int[]
     */
    public function getConsoleSize(): array
    {
        return $this->consoleSize;
    }

    /**
     * Initial console size, as an `[height, width]` array. (Windows only).
     *
     * @param int[] $consoleSize
     */
    public function setConsoleSize(array $consoleSize): self
    {
        $this->consoleSize = $consoleSize;

        return $this;
    }

    /**
     * Isolation technology of the container. (Windows only).
     */
    public function getIsolation(): string
    {
        return $this->isolation;
    }

    /**
     * Isolation technology of the container. (Windows only).
     */
    public function setIsolation(string $isolation): self
    {
        $this->isolation = $isolation;

        return $this;
    }
}
