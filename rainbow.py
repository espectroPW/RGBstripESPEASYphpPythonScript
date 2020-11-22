#!/usr/bin/env python
#Author: Nazmus Nasir
#Website: https://www.EasyProgramming.net

import sys
import urllib.request



contents = urllib.request.urlopen("http://192.168.1.21/control?cmd=CYCLE,100").read()




