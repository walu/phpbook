#!/bin/bash - 
#===============================================================================
#
#          FILE: repair.sh
# 
#         USAGE: ./repair.sh 
# 
#   DESCRIPTION: 
# 
#       OPTIONS: ---
#  REQUIREMENTS: ---
#          BUGS: ---
#         NOTES: ---
#        AUTHOR: DongYuezhao (Dolfly), dolfly@foxmail.com
#  ORGANIZATION: dongyuezhao.cn
#       CREATED: 2013/12/08 19时51分40秒 CST
#      REVISION:  ---
#===============================================================================

set -o nounset                              # Treat unset variables as an error
BASEDIR=$( cd $(dirname $0 )/../ >/dev/null 2>/dev/null ; pwd )
BOOKDIR=${BASEDIR}/book
TOOLDIR=${BASEDIR}/tool



#find ${BOOKDIR} -type f -name '*.md' | while read line ; do 
#    file=${line##${BASEDIR}/}
#    dir=$(dirname $file)
#    sed -E -i .bak -f ${TOOLDIR}/replace.sed $line
#done

find ${BOOKDIR} -type f -name '*.md' | while read line ; do 
    git co -- $line
done

find ${BOOKDIR} -type f -name '*.bak' -exec rm -rf {} \;
