#!/usr/bin/env python
#-*- coding: utf-8 -*-

import paramiko
import requests
import sys
import time


if len(sys.argv) > 1:
    if sys.argv[1] == "OFF":
        try:
            client = paramiko.SSHClient()

            client.set_missing_host_key_policy(paramiko.AutoAddPolicy())
            client.connect(hostname='xx.xxx.xx.xx', username= 'pi', password='monmotdepasse', timeout=4)

            stdin, stdout, stderr = client.exec_command('sudo halt')

            client.close()
        except:
            r = requests.get('http://xx.xxx.xx.xx:85/?LED4=OFF')
            sys.exit(0)

        time.sleep(40)
        r = requests.get('http://xx.xxx.xx.xx:85/?LED4=OFF')

    elif sys.argv[1] == "ON":
        r = requests.get('http://xx.xxx.xx.xx:85/?LED4=ON')

    else:
        print "Erreur d'argument ! ON ou OFF "
        sys.exit(0)
else:
    print "Erreur d'argument ! ON ou OFF "
    sys.exit(0)
