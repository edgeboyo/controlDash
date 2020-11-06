#! /usr/bin/env bash

user_list=($(who | grep -E "\(:[0-9](\.[0-9])*\)" | awk '{print $1 "@" $NF}' | sort -u))

for user in $user_list; do
    username=${user%@*}
    display=${user#*@}
    dbus=unix:path=/run/user/$(id -u $username)/bus

    sudo -u $username DISPLAY=${display:1:-1} \
                      DBUS_SESSION_BUS_ADDRESS=$dbus \
                      notify-send "$@"
done
