<?php

declare(strict_types = 1);

/**
 * abstraktni trida implemetujici rozhrani
 * @autor Bodnariuc Lukas
 */
abstract class ustrednyBodnariuc implements iustrednyBodnariuc
{
    // interni promenna ukladajici hodnotu napeti
    protected $napetiBodnariuc;
    
    /**
     * vraci hodnotu ulozenou v interni promenne napetiBodnariuc, jinak vraci NULL
     * @return int
     */
    public function getNapetiBodnariuc(): int
    {
        return $this->napetiBodnariuc;
    }
    
    /**
     * uklada hodnotu z parametru value do interni promenne napetiBodnariuc
     * @param int $value
     */
    public function setNapetiBodnariuc(int $value)
    {
        $this->napetiBodnariuc = $value;
    }
};

?>