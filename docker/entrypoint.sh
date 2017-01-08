#!/bin/sh

if [ -z ${AUCTION_DSN} ]; then
    echo >&2 'error: you need to specify the AUCTION_DSN environment variable '
    exit 1
fi

exec "$@"
