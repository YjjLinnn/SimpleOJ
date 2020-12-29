import os
import sys
import subprocess

path = os.getcwd()
os.chdir(path + '\\mingw64\\bin')
os.system('g++ ' + path + '\\code.cpp -o ' + path + '\\judge')
os.chdir(path)

data_out = open('1.out','r',encoding='utf-8')
ans = data_out.readline()
ans = ans.strip()
data_out.close()

data_in = open('1.in','r',encoding='utf-8')
p = subprocess.Popen('judge.exe',stdin=data_in,stdout=subprocess.PIPE)
s = str(p.stdout.readline(), encoding = "utf-8")
s = s.strip()
data_in.close()
p.kill()

if ans == s:
    print('1')
else: print('0')