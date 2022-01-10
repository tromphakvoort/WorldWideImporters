<?php

namespace App\Models;

class User
{
    protected ?int $id;
    protected string $first_name;
    protected string $last_name;
    protected string $email;
    protected ?int $phonenumber;
    private string $password;
    protected ?string $user_permission;
    protected ?string $created_at;
    protected ?string $updated_at;

    public function __construct()
    { }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * @return int|null
     */
    public function getPhonenumber(): ?int
    {
        return $this->phonenumber;
    }

    /**
     * @param int|null $phonenumber
     */
    public function setPhonenumber(?int $phonenumber): void
    {
        $this->phonenumber = $phonenumber;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string|null
     */
    public function getUserPermission(): ?string
    {
        return $this->user_permission;
    }

    /**
     * @param string|null $user_permission
     */
    public function setUserPermission(?string $user_permission): void
    {
        $this->user_permission = $user_permission;
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->created_at;
    }

    /**
     * @param string|null $created_at
     */
    public function setCreatedAt(?string $created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updated_at;
    }

    /**
     * @param string|null $updated_at
     */
    public function setUpdatedAt(?string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }

}
