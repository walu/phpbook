#!/bin/env -f sed 
s#<preface\.md>#</book/preface.md>#g
s#<index.md>#</book/index.md>#g
s#\(([0-9].*\.md)\)#(<\1>)#g
s#<(([1-9])\.[^>]*)>#</book/chapt0\2/\1>#g
s#<(([0-9]{1,})\.[^>]*)>#</book/chapt\2/\1>#g
