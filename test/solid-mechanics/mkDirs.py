# Sam Macharia SiliconWit
# Make project folders and files 
# https://siliconwit.com/ 

#===================================================#
# NEEDED FILES:
# ["mkDirs.py", "build.py"]
# ["docinfo.html", "docinfo-footer.html", "startComments.html", \
# "subscribe.html"]
#===================================================#

from pathlib import Path
import shutil, traceback 

#===================================================#

project = input("\n=> Enter the project name: ")+"/" 
Path(project).mkdir(parents=True, exist_ok=True) 

files = ["mkDirs.py", "build.py"]
for i in files:
    shutil.copy(i, project)
    
file = Path(project+"build.py")
try:
    file.write_text(file.read_text().replace('project = "SiliconWit.com"', 'project = "'+project[:-1]+'"')) 
    print("Project name: %s" %project[:-1])
except Exception:
    traceback.print_exc()

folders = ["modules"] # ,"packages"
for i in folders:
    Path(project+i+"/").mkdir(parents=True, exist_ok=True)

files = ["README.adoc"] # "antora-playbook.yml",
for i in files: 
    Path(project+i+"/").write_text("# Sam Macharia SiliconWit \n\n") 

root = project+"modules/ROOT/"
Path(root).mkdir(parents=True, exist_ok=True) 

folders = ["attachments", "example-codes", "images", "pages", "partial-pages"]
for i in folders:
    Path(root+i+"/").mkdir(parents=True, exist_ok=True)

files = ["docinfo.html", "docinfo-footer.html", "startComments.html", "subscribe.html"]
for i in files:
    shutil.copy(i, root+"partial-pages/")

folders = ["adocs", "htmls", "phps", "pdfs"]
for i in folders:
    Path(root+"pages/"+i+"/").mkdir(parents=True, exist_ok=True)

Path(root+"pages/adocs/index.adoc/").write_text("// Sam Macharia SiliconWit \n\n")

#===================================================#

# named_module = project+"modules/named-module/"
# Path(named_module).mkdir(parents=True, exist_ok=True) 

# folders = ["pages"]
# for i in folders:
#     Path(named_module+i+"/").mkdir(parents=True, exist_ok=True) 

# Path(named_module+"nav.adoc/").write_text("// Sam Macharia SiliconWit \n\n")
