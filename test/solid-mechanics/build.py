# add a php line as the very first line of the html doc 
# save the new doc as php
# change comments identifier and reference name 
# Sam Macharia, PhD

from pathlib import Path 
from subprocess import call 
import pdfkit 

project = "solid-mechanics" # input("\n=> Enter only the <name> of the <name>.html file: ")
project_path = "modules/ROOT/pages/adocs/"
htmls = "modules/ROOT/pages/htmls/"
phps = "modules/ROOT/pages/phps/"
pdfs = "modules/ROOT/pages/pdfs/"

#call("asciidoctor --backend html5 -D "+htmls+" -a data-uri "+project_path+project+".adoc", shell=True)
call("asciidoctor -r asciidoctor-multipage -D "+htmls+project+"/"+" --backend multipage_html5 -a data-uri "+project_path+project+".adoc", shell=True)
call("asciidoctor -r asciidoctor-pdf -a pdf-theme=basic-theme.yml -a optimize -r asciidoctor-mathematical -D "+pdfs+" -b pdf "+project_path+project+".adoc", shell=True)

html_file = htmls+project +".html"
#pdfkit.from_file(html_file, pdfs+project+'.pdf') 
#pdfkit.from_url('https://siliconwit.com/solid-mechanics', pdfs+project+'.pdf')

php_file = phps+project +".php"
string = "<?php session_start(); ?>"

def insert(html_file,string):
    with open(html_file,'r') as f:
        with open(php_file,'w') as f2:
            f2.write(f'{string}\n')
            f2.write(f.read())

insert(html_file,string)

file = Path(php_file)
file.write_text(file.read_text().replace("$cmtx_identifier = '1';", "$cmtx_identifier = '"+project+"';"))
file.write_text(file.read_text().replace("$cmtx_reference  = 'Comments';", "$cmtx_reference  = '"+project+"';"))
