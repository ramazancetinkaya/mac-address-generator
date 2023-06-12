
# Mac Address Generator Library

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![Version](https://img.shields.io/badge/version-1.0.0-green.svg)](https://github.com/ramazancetinkaya/password-generator)

MAC Address Generator is a PHP library that allows you to generate random MAC addresses and provides additional functionality for manipulating them.

## Table of Contents

- [Features](#features)
- [Requirements](#requirements)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Authors](#authors)
- [Copyright](#copyright)

## Features

- Generate random MAC addresses.
- Validate MAC addresses.
- Convert MAC addresses to uppercase or lowercase.

## Requirements

- PHP 8 or higher version.

## Usage

```php
$generator = new MACAddressGenerator();

// Generate a random MAC address
$macAddress = $generator->generate();
echo "Generated MAC Address: $macAddress\n";

// Validate a MAC address
if ($generator->validate($macAddress)) {
    echo "MAC Address is valid.\n";
} else {
    echo "MAC Address is invalid.\n";
}

// Convert a MAC address to uppercase
$uppercaseMAC = $generator->toUpperCase($macAddress);
echo "Uppercase MAC Address: $uppercaseMAC\n";

// Convert a MAC address to lowercase
$lowercaseMAC = $generator->toLowerCase($macAddress);
echo "Lowercase MAC Address: $lowercaseMAC\n";
```

### `generate()`

Generates a random MAC address.

Returns: `string` - The generated MAC address.

### `validate($macAddress)`

Validates a MAC address.

Parameters:
- `$macAddress` (`string`): The MAC address to validate.

Returns: `bool` - True if the MAC address is valid, false otherwise.

### `toUpperCase($macAddress)`

Converts a MAC address to uppercase.

Parameters:
- `$macAddress` (`string`): The MAC address to convert.

Returns: `string` - The MAC address in uppercase.

### `toLowerCase($macAddress)`

Converts a MAC address to lowercase.

Parameters:
- `$macAddress` (`string`): The MAC address to convert.

Returns: `string` - The MAC address in lowercase.

## Contributing

Contributions are welcome! If you encounter any issues or have suggestions for improvements, please create an issue or submit a pull request. 
Make sure to follow the existing coding style and provide tests for your changes.

## License

This project is licensed under the MIT License. See the LICENSE file for details.

## Authors

**Ramazan Çetinkaya**
- <https://github.com/ramazancetinkaya>

## Copyright

Copyright (c) [2023] [Ramazan Çetinkaya]
