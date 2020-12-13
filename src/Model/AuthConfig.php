<?php

declare(strict_types=1);

namespace Docker\API\Model;

class AuthConfig
{
    /**
     * @var string
     */
    protected $username;
    /**
     * @var string
     */
    protected $password;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $serveraddress;

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getServeraddress(): string
    {
        return $this->serveraddress;
    }

    public function setServeraddress(string $serveraddress): self
    {
        $this->serveraddress = $serveraddress;

        return $this;
    }
}
