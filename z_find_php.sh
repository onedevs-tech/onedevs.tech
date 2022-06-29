#!/bin/sh
find . | grep "\.php" | grep -v "/pma-onedevs/" | grep -v "^./src/"
