#!/bin/sh

# 十分钟进行一次计划任务
min="`date +%M`"
if [ "${min:1:1}" = "0" ]
then
    php "${OPENSHIFT_REPO_DIR}do.php" || ( echo 'Cron task failed.' >&2 )
fi
