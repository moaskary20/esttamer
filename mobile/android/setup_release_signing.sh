#!/bin/bash
# Run this script from mobile/android/ to create release signing for Google Play.
# Usage: cd mobile/android && bash setup_release_signing.sh

set -e
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
cd "$SCRIPT_DIR"

KEYSTORE_FILE="upload-keystore.jks"
KEY_PROPERTIES="key.properties"

if [ -f "$KEY_PROPERTIES" ] && [ -f "$KEYSTORE_FILE" ]; then
    echo "key.properties and $KEYSTORE_FILE already exist. Nothing to do."
    echo "To rebuild: cd .. && flutter build appbundle"
    exit 0
fi

echo "=== Release signing setup for Google Play ==="
echo ""

if [ ! -f "$KEYSTORE_FILE" ]; then
    echo "Step 1: Create keystore (you will be asked for a password - SAVE IT SAFELY!)"
    keytool -genkey -v -keystore "$KEYSTORE_FILE" -keyalg RSA -keysize 2048 -validity 10000 -alias upload
    echo "Created $KEYSTORE_FILE"
else
    echo "Keystore $KEYSTORE_FILE already exists."
fi

if [ ! -f "$KEY_PROPERTIES" ]; then
    echo ""
    echo "Step 2: Create key.properties from example."
    cp key.properties.example "$KEY_PROPERTIES"
    echo "Created $KEY_PROPERTIES - YOU MUST EDIT IT and set storePassword and keyPassword to the password you used above."
    echo "  Example: storePassword=YourPassword"
    echo "           keyPassword=YourPassword"
    echo "           keyAlias=upload"
    echo "           storeFile=upload-keystore.jks"
    echo ""
    echo "Edit with: nano $KEY_PROPERTIES   (or use any editor)"
else
    echo "key.properties already exists."
fi

echo ""
echo "=== Next steps ==="
echo "1. Edit android/key.properties and set storePassword and keyPassword (same as keystore password)."
echo "2. Build: cd to mobile/ and run:  flutter build appbundle"
echo "3. Upload: build/app/outputs/bundle/release/app-release.aab to Google Play Console."
echo ""
echo "Do NOT commit key.properties or *.jks to git."
