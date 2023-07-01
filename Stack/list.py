stack = []

def pushElement():
    val = input("Eneter a value to push : ")
    stack.append(val)
    print(stack)
    print("\n")

def popElement():
    if len(stack) == 0:
        print("stack is empty!")
    else:
        stack.pop()
        print(stack)
        print("\n")

while True:
    inp = int(input("Choose a operation \n 1.Push element \n 2.Pop element \n 3.Quit\n"))
    if inp == 1:
        pushElement()
    elif inp == 2:
        popElement()
    elif inp == 3:
        print("Bye!")
        break
    else:
        print("Invalid input! \n ")