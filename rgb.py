#!/usr/bin/env python
#Author: Nazmus Nasir
#Website: https://www.EasyProgramming.net

import sys
import urllib.request


red = sys.argv[1]
green = sys.argv[2]
blue = sys.argv[3]


parametry = "{},{},{}".format(red, green, blue)
contents = urllib.request.urlopen("http://192.168.1.21/control?cmd=RGB,%s" % parametry).read()