#!/usr/bin/env sh
set -e

cd "$(dirname "$0")/../"

# Install dependencies
composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# Install build tool
cd build
composer install --no-dev --optimize-autoloader --ignore-platform-reqs
cd ../

# Run build
./build/vendor/bin/box compile
