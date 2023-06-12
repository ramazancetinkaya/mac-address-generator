<?php
/**
 * MAC Address Generator Library
 *
 * This library generates random MAC addresses and provides additional utility functions.
 *
 * @category  Library
 * @package   MACAddressGenerator
 * @version   1.0.0
 * @author    Ramazan Çetinkaya
 * @license   MIT License
 * @link      https://github.com/ramazancetinkaya/mac-address-generator
 */

/**
 * MACAddressGenerator Class
 *
 * This class provides methods to generate random MAC addresses.
 */
class MACAddressGenerator
{
    /**
     * Generate a random MAC address.
     *
     * @return string Randomly generated MAC address.
     */
    public static function generate(): string
    {
        // Generate 6 random hexadecimal numbers
        $hexNumbers = [];
        for ($i = 0; $i < 6; $i++) {
            $hexNumbers[] = str_pad(dechex(random_int(0, 255)), 2, '0', STR_PAD_LEFT);
        }

        // Concatenate the hexadecimal numbers with colons
        $macAddress = implode(':', $hexNumbers);

        return $macAddress;
    }

    /**
     * Validate a MAC address.
     *
     * @param string $macAddress MAC address to validate.
     * @return bool True if the MAC address is valid, false otherwise.
     */
    public static function validate(string $macAddress): bool
    {
        // Use regular expression to validate MAC address format
        $pattern = '/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/';

        return (bool)preg_match($pattern, $macAddress);
    }
  
    /**
     * Converts a MAC address to uppercase.
     *
     * @param string $macAddress The MAC address to convert.
     *
     * @return string The MAC address in uppercase.
     */
    public function toUpperCase(string $macAddress): string
    {
        return strtoupper($macAddress);
    }
    
    /**
     * Converts a MAC address to lowercase.
     *
     * @param string $macAddress The MAC address to convert.
     *
     * @return string The MAC address in lowercase.
     */
    public function toLowerCase(string $macAddress): string
    {
        return strtolower($macAddress);
    }

}
