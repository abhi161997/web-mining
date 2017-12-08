import requests
from bs4 import BeautifulSoup
abc=input("Enter the keyword: ")
s="https://www.flipkart.com/search?q="+abc+"&otracker=start&as-show=off&as=off&affid=nathgopin&mpkllidd=KJMNKKMJKJNKK&qhkjnkhH=kjmlmlmlknlqa&afftag=marklixma"
r= requests.get(s)
soup=BeautifulSoup(r.content,"lxml")
links=soup.find_all("a",{"class":"_2cLu-l"})
link2=soup.find_all("div",{"class":"_1vC4OE"})
i=0
def strip_non_ascii(string):
    ''' Returns the string without non ASCII characters'''
    stripped = (c for c in string if 0 < ord(c) < 127)
    return ''.join(stripped)

filename="flipkart.csv"
f=open(filename,"w")
for link in links:
    a= link.get('title')
    b=link2[i].text.strip()
    c=strip_non_ascii(b)
    i=i+1
    f.write("%s,%s\n" % (a.replace(",",""),c.replace(",","")))
f.close()