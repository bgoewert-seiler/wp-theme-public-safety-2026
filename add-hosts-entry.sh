#!/bin/bash
#
# Add publicsafety.local to /etc/hosts
# Run with: sudo ./add-hosts-entry.sh
#

HOSTNAME="publicsafety.local"
HOSTS_FILE="/etc/hosts"

# Check if running as root
if [ "$EUID" -ne 0 ]; then
    echo "Please run with sudo: sudo ./add-hosts-entry.sh"
    exit 1
fi

# Check if entry already exists (exact match with 127.0.0.1)
if grep -qE "^127\.0\.0\.1[[:space:]]+$HOSTNAME" "$HOSTS_FILE"; then
    echo "✅ $HOSTNAME is already in /etc/hosts"
    exit 0
fi

# Add entry
echo "Adding $HOSTNAME to $HOSTS_FILE..."
echo "127.0.0.1 $HOSTNAME" >> "$HOSTS_FILE"

if [ $? -eq 0 ]; then
    echo "✅ Successfully added $HOSTNAME to /etc/hosts"
    echo ""
    echo "You can now access your site at: https://$HOSTNAME:8443"
else
    echo "❌ Failed to add $HOSTNAME to /etc/hosts"
    exit 1
fi
