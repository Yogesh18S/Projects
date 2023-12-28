mf = open("sample.txt",'r')
l=0
u=0
ch = mf.read()
print(ch)
for i in ch:
    if i.islower():
        l += 1
        print(i)
        print(l)
    elif i.isupper():
        u += 1
        print(i)

print("lower letters :" , l)
print("upper letters :" , u)