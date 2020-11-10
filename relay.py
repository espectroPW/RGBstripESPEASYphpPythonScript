import sys
import urllib.request


relay = sys.argv[1]
state = sys.argv[2]



parametry = "{},{}".format(relay, state)
contents = urllib.request.urlopen("http://192.168.1.21/control?cmd=gpio,%s" % parametry).read()