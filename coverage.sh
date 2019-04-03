#!/bin/bash
coverage=$(vendor/bin/codecept run --coverage | grep -i Classes:)
percentage="$(echo $coverage | cut -d' ' -f3)"
echo $percentage
