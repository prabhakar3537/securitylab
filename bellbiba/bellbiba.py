userinfo = {
    "a": 0,
    "b": 1,
    "c": 2,
    "d": 3
}

fileinfo = {
    "sample.txt": 0,
    "samp1.txt": 1,
    "samp2.txt": 2,
    "samp3.txt": 3
}
def biba(login, doc, rw):
    global userinfo
    global fileinfo
    if rw==1:
        if userinfo[login]<=fileinfo[doc]:
            f = open(doc, "r")
            print(f.read())
        else:
            print("\nCannot read - insufficient access rights")
    elif rw==2:
        if userinfo[login]>=fileinfo[doc]:
            content=input("Write: \n")
            f = open(doc, "a")
            f.write(content)
            print("\nAppended in ",doc)
            f.close()
        else:
            print("\nCannot write - insufficient access rights")
    return

def blp(login, doc, rw):
    global userinfo
    global fileinfo
    if rw==1:
        if userinfo[login]>=fileinfo[doc]:
            f = open(doc, "r")
            print(f.read())
        else:
            print("\nCannot read - insufficient access rights")
    elif rw==2:
        if userinfo[login]<=fileinfo[doc]:
            content=input("Write: \n")
            f = open(doc, "a")
            f.write(content)
            print("Appended in ",doc)
            f.close()
        else:
            print("Cannot write - insufficient access rights")
    return



brb = int(input("1. BLP 2. BIBA\n"))
login = input("Enter login ID: \n")
doc = input("Enter file you want to access: \n")
rw = int(input("1. Read  \n2. Write \n"))

if brb==1: #blp
	blp(login, doc, rw)

elif brb==2: #biba
	biba(login, doc, rw)
