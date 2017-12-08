import requests
from bs4 import BeautifulSoup
import MySQLdb
import re
abc=input("Enter the keyword: ")
s="https://www.ebay.in/sch/i.html?_from=R40&_trksid=p2050601.m570.l1313.TR0.TRC0.H0."+abc+".TRS0&_nkw="+abc+"&_sacat=0"
r= requests.get(s)
soup=BeautifulSoup(r.content,"lxml")
names=soup.find_all("a",{"class":"vip"})
features=soup.find_all("a",{"class":"lvsubtitle"})
price = soup.find_all("span",{"class":"bold"})

print(len(links))
i=0
def strip_non_ascii(string):
    ''' Returns the string without non ASCII characters'''
    stripped = (c for c in string if 0 < ord(c) < 127)
    return ''.join(stripped)

filename="ebay.csv"
f=open(filename,"w")
for link in links:
    a= link.string
    b= link2[i].text.strip()
    c=strip_non_ascii(b)
    i=i+1
    if f.write("%s,%s\n" % (a,c.replace(",",""))):
    	print("fetched")
    elif 1:
    	print("not fetched")	
f.close() 

