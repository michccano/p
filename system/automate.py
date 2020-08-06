import base64
import paramiko
import time


#key = paramiko.RSAKey(data=base64.b64decode(b'AAA...'))
client = paramiko.SSHClient()
#client.get_host_keys().add('ssh.example.com', 'ssh-rsa', key)
client.set_missing_host_key_policy(paramiko.AutoAddPolicy())
client.connect('167.71.97.43', username='root', password='73d419a902d912968650687fe2',look_for_keys=True, allow_agent=False)


session = client.invoke_shell()
session.send("\n")
time.sleep(1)

output = session.recv(65535)

print(output)

session.send("ec53e7a544080afb74cce7d94b\n")


output = session.recv(65535)

print(output)


session.send("123wet123\n")


session.send("123wet123\n")


output = session.recv(65535)

print(output)
"""
session.send("y\n")
time.sleep(1)


session.send("123wet123\n")
time.sleep(1)


session.send("sudo apt-get install php libapache2-mod-php php-mysql \n")
time.sleep(1)
session.send("y\n")


session.send("sudo nano /etc/apache2/mods-enabled/dir.conf \n")
time.sleep(1)
session.send("y\n")
"""


output = session.recv(65535)

print(output)






print("FIN	")
client.close()
