#!/usr/bin/python
#-*-coding:utf-8-*-

import urllib2
import urllib
import re

def Get(url):
    	html = urllib.urlopen(url);
	content = html.read();
	return content

def GetLink(contents):
	reg_link = r'<item>([\s\S]*)</item>'
	link = re.compile(reg_link)
	linklist = re.findall(link,contents)
	return linklist
def display(contents):
	reg_t = r'<title>(.*?)</title>'
	reg_p = r'<description>(.*?)</description>'
	title = re.compile(reg_t)
	titlelist = re.findall(title,contents)
	data = re.compile(reg_p)
	datalist = re.findall(data,contents)
	for i in xrange(0,len(datalist)):
		print titlelist[i]
		print "-----------------------------------"
		reg_d = r'&gt;(.*?)&lt;'
		con = re.compile(reg_d)
		datalist[i] = re.findall(con,datalist[i])
		for j in xrange(0,len(datalist[i])):
			if datalist[i][j] == '':
				continue
			else:
				print datalist[i][j]
		print  "-----------------------------------"
url="http://redsonrise.diandian.com/rss"
a = Get(url)
b = GetLink(a)
display(b[0])