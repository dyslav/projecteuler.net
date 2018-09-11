def fibonacci(num):
    arr = [0, 1]
    for i in range(num):
        addArr = arr[-1] + arr[-2]
        arr.append(addArr)
    return arr[-1]

sum = 0

i = 1
while i < 4000000:
    fi = fibonacci(i)
    i += 1
    if fi < 4000000:
        if fi % 2 == 0:
            sum += fi
    else:
        break

print(sum)
        
        
