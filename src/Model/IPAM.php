<?php

declare(strict_types=1);

namespace Docker\API\Model;

class IPAM
{
    /**
     * Name of the IPAM driver to use.
     *
     * @var string
     */
    protected $driver = 'default';
    /**
     * List of IPAM configuration options, specified as a map: `{"Subnet": <CIDR>, "IPRange": <CIDR>, "Gateway": <IP address>, "AuxAddress": <device_name:IP address>}`.
     *
     * @var string[][]
     */
    protected $config;
    /**
     * Driver-specific options, specified as a map.
     *
     * @var string[][]
     */
    protected $options;

    /**
     * Name of the IPAM driver to use.
     */
    public function getDriver(): string
    {
        return $this->driver;
    }

    /**
     * Name of the IPAM driver to use.
     */
    public function setDriver(string $driver): self
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * List of IPAM configuration options, specified as a map: `{"Subnet": <CIDR>, "IPRange": <CIDR>, "Gateway": <IP address>, "AuxAddress": <device_name:IP address>}`.
     *
     * @return string[][]
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * List of IPAM configuration options, specified as a map: `{"Subnet": <CIDR>, "IPRange": <CIDR>, "Gateway": <IP address>, "AuxAddress": <device_name:IP address>}`.
     *
     * @param string[][] $config
     */
    public function setConfig(array $config): self
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Driver-specific options, specified as a map.
     *
     * @return string[][]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * Driver-specific options, specified as a map.
     *
     * @param string[][] $options
     */
    public function setOptions(array $options): self
    {
        $this->options = $options;

        return $this;
    }
}
