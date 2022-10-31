def computeGCD(a, b):
    while(b):
       a, b = b, a % b
    return abs(a)
 
a = int(input("Enter the first nubmer:"))
b = int(input("Enter the second nubmer:"))
 
print (f"The gcd of {a} and {b} is : ",end="")
print (computeGCD(a, b))